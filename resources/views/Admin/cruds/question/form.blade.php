<div class="row col-12">
    <div class="col-12 col-lg-12">
        <div class="card card-body">
            <div class="mb-3">
                {!! Form::label('complete-editor', 'Questão', ['class'=>'form-label']) !!}
                {!! Form::textarea('question_text', null, [
                    'class'=>'form-control CkEditorColumn',
                    'id'=>'complete-editor',
                    'data-height' => 200
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::checkbox('active', '1', null, ['class'=>'form-check-input', 'id'=>'active']) !!}
                {!! Form::label('active', 'Ativo?', ['class'=>'form-check-label']) !!}
            </div>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

<script>
    if (document.querySelector(".form-pg__add-prod")) {
        const btnAddItem = document.querySelector(".form-pg__add-prod");

        const addItem = () => {
            const newItem = document.querySelector(".form-pg__prod-group__item").cloneNode(true);
            document.querySelector(".form-pg__prod-group__list").appendChild(newItem);
        };

        btnAddItem.addEventListener("click", addItem);
    }
</script>
