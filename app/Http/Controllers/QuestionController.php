<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $questions = Question::paginate(15);

        return view('Admin.cruds.question.index', [
            'questions'=>$questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.cruds.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                if (Question::create($data)){
                    Session::flash('success', 'Avaliação cadastrada com sucesso!');
                }
            DB::commit();
            return redirect()->route('admin.dashboard.question.index');
        }catch (\Exception $exception){
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar avaliação');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('Admin.cruds.question.edit', [
            'question'=>$question,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        Session::flash('success','Avaliação deletada com sucesso!');
        return redirect()->back();
    }

    public function checkAnswer(Request $request)
    {
        $questionId = $request->input('question_id');
        $selectedOption = $request->input('selected_option');

        $question = Question::find($questionId);

        if ($question->correct_option == $selectedOption) {
            return response()->json(['correct' => true]);
        } else {
            return response()->json(['correct' => false]);
        }
    }
}
