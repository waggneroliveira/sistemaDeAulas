<header class="mdl-header">

    <a href="{{ route('home') }}" class="mdl-header__logo">
        <img src="{{ asset('Client/assets/images/logo.svg') }}" alt="Logo">
    </a>

    @if ($isLogged)
        <div class="dropdown">
            <div class="dropdown__header" role="button">
                <span>Olá,<br>{{ $userName }}</span>

                <img src="{{ $profilePic }}" alt="Foto de {{ $userName }}" class="mdl-header__profile-pic">
            </div>

            <menu class="dropdown__list">
                <li class="dropdown__list__item">
                    <a href="{{ $lnkProfile }}">Meu Perfil</a>
                </li>

                <li class="dropdown__list__item">
                    <a href="{{ $lnkSup }}">Suporte</a>
                </li>

                <li class="dropdown__list__item">
                    <a href="{{ $lnkLogout }}">Sair</a>
                </li>
            </menu>
        </div>
    @endif

</header>
