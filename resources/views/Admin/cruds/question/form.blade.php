<div class="row col-12">
    <div class="col-12 col-lg-6">
        <div class="card card-body">
            <div class="mb-3">
                {!! Form::label('complete-editor', 'Questão', ['class'=>'form-label']) !!}
                {!! Form::textarea('question_text', null, [
                    'class'=>'form-control CkEditorColumn',
                    'id'=>'complete-editor',
                    'data-height' => 150
                ]) !!}
            </div>
            @if($options)
                <div class="mb-3">
                    {!! Form::label('basic-editor', 'Opções', ['class'=>'form-label', 'optionsListInput']) !!}
                    {!! Form::textarea('options', null, [
                        'class'=>'form-control CkEditorColumn',
                        'id'=>'optionsListInputs',
                        'data-height' => 150
                    ]) !!}
                </div>
            @endif

            <!-- Campo oculto para armazenar os itens -->
            {!! Form::hidden('options', null, ['id' => 'optionsListInput']) !!}

            <div class="mb-3">
                <input type="text" id="itemInput" class="form-control" placeholder="Digite um item">
            </div>
            <div class="row gap-3 ps-1">
                <a onclick="addItem()" class="btn btn-primary col-lg-3">Adicionar Opções</a>
                <!-- Botão para limpar o campo optionsListInputs -->
                @if($options)
                    <a onclick="clearOptionsListInputs()" class="btn btn-danger col-lg-3">Limpar Opções</a>
                @endif
            </div>

            <!-- Exibir itens adicionados -->
            <ul id="itemList"></ul>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

<script>
    function addItem() {
        // Obtém o valor do campo de texto
        var newItem = document.getElementById('itemInput').value;

        // Verifica se o campo não está vazio
        if (newItem.trim() !== '') {
            // Adiciona o novo item à lista
            var optionsListInput = document.getElementById('optionsListInput');
            var options = JSON.parse(optionsListInput.value || '[]'); // Converte a string JSON para array
            options.push(newItem);
            optionsListInput.value = JSON.stringify(options); // Converte o array para string JSON

            // Limpa o campo de texto
            document.getElementById('itemInput').value = '';

            // Exibe o novo item na lista
            var listItem = document.createElement('li');
            listItem.textContent = newItem;
            document.getElementById('itemList').appendChild(listItem);
        }
    }

    // Função para limpar optionsListInputs e optionsListInput
    function clearOptionsListInputs() {
        document.getElementById('optionsListInputs').value = '';
        document.getElementById('optionsListInput').value = ''; // Define como vazio
    }

</script>
