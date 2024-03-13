<div class="cmp-crd-profile">
    {{-- FRONTEND NA PG DE EDIÇÃO ESSE INPUT TEM QUE SER CARREGADO COM ATRIBUTO 'disabled' OU SEJA, ESSE ATRIBUTO DEVE SER CARREGADO VIA OBJ DE CONFIG NO INCLUDE --}}
    <img src="{{asset('Client/assets/images/cmp-crd-profile.svg')}}"
    class="cmp-crd-profile__img"
    alt="Imagem de Perfil">
    @include('Client.components.buttons.cmp-btn-01', [
        'type' => 'button',
        'text' => 'Alterar imagem'
    ])
    <input class="" type="file" name="profile-img">
    <span class="cmp-crd-profile__name"></span>
    <span class="cmp-crd-profile__cpf">CPF: </span>
    <span class="cmp-crd-profile__matricula">CPF: </span>
</div>
