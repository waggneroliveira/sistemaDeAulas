@extends('Client.core.LAYOUTS.main')
@section('content')
    <style>
        .mdl-header,
        .mdl-footer {
            display: none;
        }
    </style>
    <section class="pge-set-password">
        <main class="pge-set-password__main">

            <form action="" class="pge-set-password__main__form">

                <img src="{{ asset('Client/assets/images/logo-footer.svg') }}" alt="Logo da WHI"
                    class="pge-set-password__main__form__logo">

                @include('Client.components.inputs.cmp-inp-email', [
                    'placeholder' => 'Email',
                    'name' => 'email',
                    'required' => false,
                ])

                @include('Client.components.inputs.cmp-inp-password', [
                    'placeholder' => 'Senha Provisória',
                    'name' => 'pwd-provisoria',
                    'required' => false,
                ])

                @include('Client.components.inputs.cmp-inp-password', [
                    'placeholder' => 'Nova Senha',
                    'name' => 'pwd-nova',
                    'required' => false,
                ])

                @include('Client.components.inputs.cmp-inp-password', [
                    'placeholder' => 'Confirmar nova senha',
                    'name' => 'pwd-nova-confirm',
                    'required' => false,
                ])

                @include('Client.components.buttons.cmp-btn-03', [
                    'type' => 'submit',
                    'text' => 'Entrar',
                ])

            </form>

            <img src="{{ asset('Client/assets/images/pge-login__banner.png') }}"
                alt="BACKEND VER POSSIBILIDADE DE PEGAR DESCRIÇÃO NO PAINEL" class="pge-set-password__main__banner">

        </main>
    </section>
@endsection
