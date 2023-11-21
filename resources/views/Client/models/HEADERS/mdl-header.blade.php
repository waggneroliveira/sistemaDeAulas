<header class="mdl-header">

    <a href="{{ route('home') }}" class="mdl-header__logo">
        <img src="{{ asset('Client/assets/images/logo.svg') }}" alt="Logo">
    </a>

    @if ($isLogged)
        <x-dropdown>
            <x-slot name='header'>
                <span>Olá, Vania</span>

                <img src="{{ $profilePic }}" alt="Foto de [user]" class="mdl-header__profile-pic">
            </x-slot>

            <x-slot name="menuItems">
                <li class="dropdown__list__item">
                    <a href="">Meu Perfil</a>
                </li>

                <li class="dropdown__list__item">
                    <a href="">Suporte</a>
                </li>

                <li class="dropdown__list__item">
                    <a href="">Sair</a>
                </li>
            </x-slot>
        </x-dropdown>
    @endif

</header>
