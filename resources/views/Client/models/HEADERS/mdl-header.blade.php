<header class="mdl-header">

    <a href="{{ route('home') }}" class="mdl-header__logo">
        <img src="{{ asset('Client/assets/images/logo.svg') }}" alt="Logo">
    </a>

    @if ($isLogged)
        <div class="dropdown">
            <div class="dropdown__header" role="button">
                <span>Olá,<br>Vania</span>

                <img src="{{ $profilePic }}" alt="Foto de [user]" class="mdl-header__profile-pic">
            </div>

            <menu class="dropdown__list">
                <li class="dropdown__list__item">
                    <a href="">Meu Perfil</a>
                </li>

                <li class="dropdown__list__item">
                    <a href="">Suporte</a>
                </li>

                <li class="dropdown__list__item">
                    <a href="">Sair</a>
                </li>
            </menu>
        </div>
    @endif

</header>
