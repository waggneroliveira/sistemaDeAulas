<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('options')
            ->sorting()
            ->paginate(15);

        return view('Admin.cruds.question.index', [
            'questions'=>$questions,
        ]);
    }

    public function create()
    {
        return view('Admin.cruds.question.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                if ($question = Question::create($data)){
                    Session::flash('success', 'Avaliação cadastrada com sucesso!');
                }
            DB::commit();
            return redirect()->route('admin.dashboard.question.edit',['question'=>$question]);
        }catch (\Exception $exception){
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar avaliação');
            return redirect()->back();
        }
    }

    public function edit(Question $question)
    {
        $options = Option::with('question')->sorting()->get();

        return view('Admin.cruds.question.edit', [
            'question'=>$question,
            'options'=>$options,
        ]);
    }

    public function update(Request $request, Question $question)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                $question->fill($data)->save();
            DB::commit();
            Session::flash('success', 'Avaliação atualizada com sucesso!');
            return redirect()->route('admin.dashboard.question.index');
        }catch (\Exception $exception){
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar avaliação');
            return redirect()->back();
        }
    }

    public function destroy(Question $question)
    {
        $question->delete();
        Session::flash('success','Avaliação deletada com sucesso!');
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {
        if (!Auth::user()->can(['resposta.visualizar', 'resposta.remover'])) {
            return view('Admin.error.403');
        }

        $deletedItems = Question::whereIn('id', $request->deleteAll)->get();

        if ($deletedItems->count() > 0) {
            Question::whereIn('id', $request->deleteAll)->delete();

            foreach ($deletedItems as $deletedItem) {
                activity()
                    ->performedOn($deletedItem)
                    ->causedBy(Auth::user())
                    ->log('deleted');
            }

            return Response::json(['status' => 'success', 'message' => $deletedItems->count().' itens deletados com sucesso!']);
        } else {
            return Response::json(['status' => 'error', 'message' => 'Nenhum item selecionado para exclusão']);
        }
    }
    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id){
            Question::where('id', $id)->update(['sorting' => $sorting]);
        }
        return Response::json(['status' => 'success']);
    }
}
