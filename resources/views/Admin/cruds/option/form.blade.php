
<div class="row col-12">
    <div class="col-12 col-lg-12">
        <div class="card card-body">
            <input type="hidden" name="question_id" value="{{$question->id}}">

            <div class="mb-3 col-lg-12">
                {!! Form::label(null, 'Resposta', ['class'=>'form-label']) !!}
                {!! Form::text('response', null, ['class'=>'form-control', 'id'=>'validationCustom01']) !!}
            </div>

            <div class="mb-3">
                {!! Form::checkbox('correct_option', '1', null, ['class'=>'form-check-input', 'id'=>'correct_option']) !!}
                {!! Form::label('correct_option', 'Opção correta?', ['class'=>'form-check-label']) !!}
            </div>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
    <div class="col-12 col-lg-6">
        <div class="card card-body">
{{--            <div class="mb-3 col-lg-12">--}}
{{--                {!! Form::label('file', 'Anexar atividade', ['class'=>'form-label']) !!}--}}
{{--                {!! Form::file('path_file', [--}}
{{--                    'data-plugins'=>'dropify',--}}
{{--                    'data-height'=>'200',--}}
{{--                    'data-max-file-size-preview'=>'2M',--}}
{{--                    'accept'=>'image/*',--}}
{{--                    'data-default-file'=> isset($file)?$file->path_file<>''?url('storage/'.$file->path_file):'':'',--}}
{{--                ]) !!}--}}
{{--            </div>--}}
        </div>

    </div>
</div>

<!-- end row -->
