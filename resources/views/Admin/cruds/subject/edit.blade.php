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
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard.subject.index')}}">Disciplinas</a></li>
                                    <li class="breadcrumb-item active">Editar Disciplina</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Editar Disciplina</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                {!! Form::model($subject, ['route' => ['admin.dashboard.subject.update', $subject->id], 'class'=>'parsley-examples position-relative', 'method' => 'PUT', 'files' => true]) !!}
                    @include('Admin.cruds.subject.form')

                    {!! Form::button('Salvar', ['class'=>'btn btn-primary waves-effect waves-light float-end me-3 width-lg', 'type' => 'submit']) !!}
                    <a href="{{route('admin.dashboard.subject.index')}}" class="btn btn-secondary waves-effect waves-light float-end me-3 width-lg">Voltar</a>
                {!! Form::close() !!}
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    @include('Admin.components.links.resourcesCreateEdit')
@endsection