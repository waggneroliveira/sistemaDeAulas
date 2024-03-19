@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="pge-signup-pers">

        <main class="pge-signup-pers__main">
            <h1 class="pge-signup-pers__main__title">
                Inicie seu cadastro preenchendo os dados abaixo
            </h1>

            <ul class="pge-signup-pers__main__tabs">
                <li class="pge-signup-pers__main__tabs__item active">
                    Dados Pessoais
                </li>

                <li class="pge-signup-pers__main__tabs__item">
                    Dados Institucionais
                </li>
            </ul>

            <form action="" class="pge-signup-pers__main__form">
                <div class="pge-signup-pers__main__form__buttons">
                    @include('Client.components.buttons.cmp-btn-05', [
                        'text' => 'Avançar',
                        'type' => 'submit',
                    ])

                </div>

                <div class="pge-signup-pers__main__form__list">
                    {{-- NEXT: FRONTEND BACKEND
                    A mascara para matricula vai ser o formato da matricula que o cliente possuir --}}
                    @include('Client.components.inputs.cmp-inp-text', [
                        'placeholder' => 'Nome',
                        'name' => 'name',
                        'required' => false,
                        'value' => '',
                    ])

                    @include('Client.components.inputs.cmp-inp-text', [
                        'placeholder' => 'CPF',
                        'name' => 'cpf',
                        'maskClass' => 'cpf',
                        'required' => false,
                        'value' => '',
                    ])

                    @include('Client.components.inputs.cmp-inp-text', [
                        'placeholder' => 'RG',
                        'name' => 'rg',
                        'maskClass' => 'rg',
                        'required' => false,
                        'value' => '',
                    ])

                </div>

                @include('Client.components.cards.cmp-crd-profile')

                <div class="pge-signup-pers__main__form__text">
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

        <aside class="pge-signup-pers__main__slider">
            <div class="pge-signup-pers__main__slider__carousel">
                <div class="pge-signup-pers__main__slider__carousel__swiper-wrapper swiper-wrapper">
                    @for ($i = 0; $i < 4; $i++)
                        <figure class="pge-signup-pers__main__slider__item swiper-slide">
                            <img src="{{ asset('Client/assets/images/cat-sqr.jpg') }}"
                                class="pge-signup-pers__main__slider__item__img" alt="BACKEND - INSERIR legenda da imagem">
                            <figcaption class="pge-signup-pers__main__slider__item__label">An elephant at sunset
                            </figcaption>
                        </figure>
                    @endfor
                </div>
            </div>
            <div class="pge-signup-pers__main__slider__carousel__swiper-pagination"></div>
        </aside>

    </section>
@endsection
