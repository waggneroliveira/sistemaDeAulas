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
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard.student.index')}}">Usuários</a></li>
                                    <li class="breadcrumb-item active">Registros deletados</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Registros deletados</h4>
                        </div>
                    </div>
                </div>
                <div class="row gap-3 justify-content-end">
                    @if (Auth::user()->hasRole('Super') || Auth::user()->hasRole('Administrador'))
                        <div class="col-4 mb-3 row gap-2 align-content-md-end">
                            <button id="btSubmitDeleteForever" data-route="{{route('admin.dashboard.student.destroySelectedForced')}}" type="button" class="btn btn-danger ms-2" style="display: none;width:170px;">Deletar registros <i class="mdi mdi-delete-restore"></i></button>

                            <button id="btSubmitRestore" data-route="{{route('admin.dashboard.student.retoreDataAll')}}" type="button" class="btn btn-primary" style="display: none;width:170px;">Restaurar registros <i class="mdi mdi-restore"></i></button>
                        </div>
                    @endif
                    <div class="col-8 p-0 d-flex flex-wrap">
                        <form action="{{route('admin.dashboard.student.show.search')}}" method="POST" class="row justify-content-end col-12">
                            @csrf
                            <h5 class="page-title" style="padding-left: 0px">Filtrar por:</h5>
                            <div class="data-search p-0">
                                <input type="date" name="date_search">
                            </div>
                            <div class="input-group mb-3" style="width: 40%;">
                                <input name="email" type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2">
                            </div>
                            <div class="input-group mb-3 p-0" style="width: 40%;">
                                <input name="name" type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row col-lg-12 d-flex justify-content-end mb-3 ms-0">
                    @if (route('admin.dashboard.student.show.search') == url()->current())
                        <a href="{{route('admin.dashboard.student.show')}}" class="btn btn-primary" style="width: 110px;height: 38px;margin-top: 0px;">Limpar Filtro</a>
                    @endif
                </div>

                <!-- end page title -->
                <table data-toggle="table" data-page-size="5" data-pagination="false" class="table-bordered table-sortable">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th class="bs-checkbox">
                                <label><input name="btnSelectAll" type="checkbox"></label>
                            </th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Deletado em</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody data-route="{{route('admin.dashboard.student.sorting')}}">
                        @foreach ($studentDeleteds_at as $key => $student)
                            <tr data-code="{{$student->id}}">
                                <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                <td class="bs-checkbox">
                                    <label><input data-index="{{$key}}" name="btnSelectItem" class="btnSelectItem" type="checkbox" value="{{$student->id}}"></label>
                                </td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->created_at->format('d/m/Y')}}</td>
                                <td>
                                    <div class="row">
                                        @can('usuario.editar')
                                            <div class="col-4">
                                                <form action="{{route('admin.dashboard.student.retoreData',['student' => $student->id])}}" class="col-4" method="POST">
                                                    @csrf
                                                    @method('POST')

                                                    <button type="submit" class="btn-icon" title="Restaurar item"><i class="mdi mdi-restore"></i></button>
                                                </form>
                                            </div>
                                        @endcan
                                        @can('usuario.remover')
                                            <form action="{{route('admin.dashboard.student.deleteForced',['student' => $student->id])}}" class="col-4" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="button" class="btn-icon btSubmitDeleteItemForever" title="Deletar permanentemente"><i class="mdi mdi-delete-forever-outline"></i></button>
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
                    {{$studentDeleteds_at->links()}}
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    <script>
        var studentIndexRoute = "{{ route('admin.dashboard.student.index') }}";
    </script>
    @include('Admin.components.links.resourcesCreateEdit')
@endsection
