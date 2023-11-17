<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class OptionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                $data['correct_option'] = $request->correct_option ? 1 : 0;
                Option::create($data);
            DB::commit();
            Session::flash('success', 'Resposta cadastrada com sucesso!');
            Return redirect()->back();
        }catch (\Exception $exception){
            DB::rollBack();
            Session::flash('error', 'Erro ao cadastrar resposta');
            return redirect()->back();
        }
    }

    public function update(Request $request, Option $option)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                $data['correct_option'] = $request->correct_option ? 1 : 0;
                $option->fill($data)->save();
            DB::commit();
            Session::flash('success', 'Resposta atualizada com sucesso!');
            Return redirect()->back();
        }catch (\Exception $exception){
            DB::rollBack();
            Session::flash('error', 'Erro ao atualizar resposta');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        $option->delete();

        Session::flash('success','Resposta deletada com sucesso!');
        return redirect()->back();
    }
    public function destroySelected(Request $request)
    {
        if(!Auth::user()->can(['resposta.visualizar','resposta.remover'])){
            return view('Admin.error.403');
        }

        if($deleted = Option::whereIn('id', $request->deleteAll)->delete()){
            return Response::json(['status' => 'success', 'message' => $deleted.' itens deletados com sucessso!']);
        }
    }
    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id){
            Option::where('id', $id)->update(['sorting' => $sorting]);
        }
        return Response::json(['status' => 'success']);
    }
}
