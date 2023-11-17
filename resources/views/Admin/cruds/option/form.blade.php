
<div class="row col-12">
    <div class="col-12 col-lg-12">
        <div class="card card-body align-items-start">
            <input type="hidden" name="question_id" value="{{$question->id}}">

            <div class="mb-3 col-lg-12 d-flex flex-column align-items-start">
                {!! Form::label(null, 'Resposta', ['class'=>'form-label']) !!}
                {!! Form::text('response', null, ['class'=>'form-control', 'id'=>'validationCustom01']) !!}
            </div>

            <div class="mb-3">
                {!! Form::checkbox('correct_option', '1', null, ['class'=>'form-check-input', 'id'=>'correct_option']) !!}
                {!! Form::label('correct_option', 'Opção correta?', ['class'=>'form-check-label']) !!}
            </div>
        </div> <!-- end card-body-->
    </div> <!-- end card-->

</div>

<!-- end row -->
