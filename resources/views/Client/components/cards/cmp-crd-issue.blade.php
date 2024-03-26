<div class="cmp-crd-issue">
    {{-- BACKEND: AQUI VAI RECEBER UMA IMAGEM DINAMICA --}}
    <img class="cmp-crd-issue__icon" src="{{asset('Client/assets/images/issue-icon.svg')}}" alt="Ícone da disciplina">
    {{-- BACKEND: AQUI VAI RECEBER UM TÍTULO DINAMICA --}}
    <header class="cmp-crd-issue__header">
        <h3 class="cmp-crd-issue__header__title">Matematica</h3>
        <hr class="cmp-crd-issue__header__line">
    </header>

  @include('Client.components.buttons.cmp-btn-01', [
    'type' => 'button',
    'text' => 'continuar'
  ])
</div>
