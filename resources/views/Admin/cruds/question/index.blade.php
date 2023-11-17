@extends('Admin.core.admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Avaliação</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Avaliação</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3 justify-content-end">
{{--                                    @can('curso.remover')--}}
{{--                                        <div class="col-6 ps-2">--}}
{{--                                            <button id="btSubmitDelete" data-route="{{route('admin.dashboard.question.destroySelected')}}" type="button" class="btn btn-danger" style="display: none;">Deletar selecionados</button>--}}
{{--                                        </div>--}}
{{--                                    @endcan--}}
                                    <div class="row col-6 d-flex justify-content-end">
                                        @can('curso.criar')
                                            <div style="width: 165px">
                                                <a href="{{route('admin.dashboard.question.create')}}" class="btn btn-success float-end">Adicionar novo <i class="mdi mdi-plus"></i></a>
                                            </div>
                                        @endcan
                                    </div>
                                </div>
                                <table data-toggle="table" data-page-size="5" data-pagination="false" class="table-bordered table-sortable">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th class="bs-checkbox">
                                                <label><input name="btnSelectAll" type="checkbox"></label>
                                            </th>
                                            <th>Questão</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($questions as $key => $question)
                                            <tr>
                                                <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                                <td class="bs-checkbox">
{{--                                                    <label><input data-index="{{$key}}" name="btnSelectItem" class="btnSelectItem" type="checkbox" value="{{$question->id}}"></label>--}}
                                                </td>
                                                <td>{{substr(strip_tags($question->question_text), 0, 100)}}</td>
                                                <td>
                                                    @switch($question->active)
                                                        @case(0) <span class="badge bg-danger">Inativo</span> @break
                                                        @case(1) <span class="badge bg-success">Ativo</span> @break
                                                    @endswitch
                                                </td>
                                                <td>
                                                    <div class="row justify-content-start">
                                                        @can('curso.editar')
                                                            <div class="col-2">
                                                                <a href="{{route('admin.dashboard.question.edit',['question' => $question->id])}}" class="btn-icon mdi mdi-square-edit-outline"></a>
                                                            </div>
                                                        @endcan
                                                        @can('curso.visualizar')
                                                            <div class="col-2">
                                                                <a class="btn-icon mdi mdi-eye" data-bs-toggle="modal" data-bs-target="#modal-question-{{$question->id}}"></a>

                                                                <div id="modal-question-{{$question->id}}" class="modal fade" tabindex="-1" question="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                    <div class="modal-dialog" style="max-width: 800px;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header p-3 pt-2 pb-2">
                                                                                <h4 class="page-title">Avaliação</h4>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body p-3 pt-0 pb-3">
                                                                                {!! Form::model($question, ['route' => ['admin.dashboard.question.show', $question->id], 'class'=>'parsley-examples']) !!}
                                                                                    @include('Admin.cruds.question.form')
                                                                                {!! Form::close() !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endcan
                                                        @can('curso.remover')
                                                            <form action="{{route('admin.dashboard.question.destroy',['question' => $question->id])}}" class="col-2" method="POST">
                                                                @method('DELETE') @csrf

                                                                <button type="button" class="btn-icon btSubmitDeleteItem"><i class="mdi mdi-trash-can"></i></button>
                                                            </form>
                                                        @endcan
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- PAGINATION --}}
                                <div class="mt-3 float-end">
                                    {{$questions->links()}}
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    @include('Admin.components.links.resourcesIndex')
@endsection
