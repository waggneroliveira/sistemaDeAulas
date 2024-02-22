@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="welcome-page" style="background-image: url({{ asset('Client/assets/images/welcome-bg.png') }})">

        <div class="welcome-page__call">
            <h1 class="welcome-page__title">BEM VINDO AO FUTURO PEQUENA ESTRELA</h1>

            @include('Client.components.anchors.cmp-anc-four', [
                'text' => 'Avance Aqui',
                'url' => route('signup'),
                'target' => '_self',
            ])
        </div>

    </section>
@endsection
