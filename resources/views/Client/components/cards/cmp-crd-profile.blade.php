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

    {{-- @include('Client.components.inputs.cmp-inp-text', [
                        'name' => 'profile-img',
                        'required' => false,
                        'disabled' => false
                    ]) --}}
</div>
