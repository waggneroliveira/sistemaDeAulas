@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="pge-signup-inst">

        <main class="pge-signup-inst__main">

            <h1 class="pge-signup-inst__main__title">
                Inicie seu cadastro preenchendo os dados abaixo
            </h1>

            <ul class="pge-signup-inst__main__tabs">
                <li class="pge-signup-inst__main__tabs__item">
                    Dados Pessoais
                </li>

                <li class="pge-signup-inst__main__tabs__item">
                    Dados Institucionais
                </li>
            </ul>

            <form action="" class="pge-signup-inst__form">
                <div class="pge-signup-inst__form__panel"></div>
                <div class="pge-signup-inst__form__text"></div>
            </form>
        </main>

        {{-- ATTENTION:  --}}
        <aside class="signup__slider splide">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide signup__slider__item"></div>
                </div>
            </div>
        </aside>

    </section>
@endsection
