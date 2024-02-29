@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="pge-signup-inst">

        <main class="pge-signup-inst__main">

            <h1 class="pge-signup-inst__main__title">
                Inicie seu cadastro preenchendo os dados abaixo
            </h1>

            <ul class="pge-signup-inst__main__tabs">
                <li class="pge-signup-inst__main__tabs__item done">
                    Dados Pessoais
                </li>

                <li class="pge-signup-inst__main__tabs__item active">
                    Dados Institucionais
                </li>
            </ul>

            <form action="" class="pge-signup-inst__main__form">

                @include('Client.components.anchors.cmp-anc-05', [
                    'url' => '#',
                    'target' => '_self',
                    'text' => 'Voltar',
                ])

                @include('Client.components.buttons.cmp-btn-05', [
                    'text' => 'Finalizar',
                    'type' => 'submit',
                ])

                <div class="pge-signup-inst__main__form__text">
                    <p>Preencha os campos ao lado certificando-se que não haverá erros de digitação. <br>Todas as
                        informações
                        devem ser conferidas antes de confirmar o seu cadastro. <br>O processo de cadastro será confirmado
                        pela
                        equipe administrativa e você receberá um link com sua senha provisória em até 3 dias úteis.
                        <br>Qualquer
                        dúvida referente ao processo de cadastro poderá entrar em contato com o número ao final desta
                        página.
                    </p>
                </div>
            </form>
        </main>

        {{-- ATTENTION:  --}}
        <aside class="signup__slider">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide signup__slider__item"></div>
                </div>
            </div>
        </aside>

    </section>
@endsection
