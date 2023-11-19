<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema de Aulas - WHI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="CONTENT-LANGUAGE" content="Portuguese" />
    {{-- <link rel="shortcut icon" href="{{ asset(mix('Client/assets/images/')) }}" /> --}}

    <meta name="copyright" content="Sistema de Aulas - WHI" />
    <meta name="title" content="Sistema de Aulas - WHI" />
    <meta name="author" content="WHI - WEB DE ALTA INSPIRAÇÃO" />
    <meta name="description" content="Descrição" />
    <meta name="keywords" content="Palavras chave" />
    <!-- METAS DO FACEBOOK COMPARTILHAR -->
    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sistema de Aulas - WHI" />
    <meta property="og:description" content="Descrição" />
    {{-- <meta property="og:image" content="{{ asset(mix('')) }}" /> --}}

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset(mix('Client/assets/css/app.css')) }}" />

</head>

<body>
    {{-- TODO: (BACKEND) usar controle de session para definir se o usuário está logado; --}}
    @php
        $objHeader = [
            'isLogged' => true,
            'username' => 'Vânia',
            'profilePic' => asset('Client/assets/images/user.png'),
            'lnk-profile' => '#', // TODO: rota para pg de perfil
            'lnk-sup' => '#', // TODO: rota para suporte
            'lnk-logout' => '#', // TODO: rota para sair
        ];
    @endphp

    @include('Client.models.HEADERS.mdl-header', $objHeader)

    <main id="page">
        @yield('content')
    </main>

    {{-- <script src="{{ asset(mix('Client/assets/js/main.js')) }}"></script> --}}
</body>

</html>
<!-- END -->
