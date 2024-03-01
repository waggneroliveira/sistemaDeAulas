@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="pge-welcome-page" style="background-image: url({{ asset('Client/assets/images/welcome-bg.png') }})">

        <div class="pge-welcome-page__call">
            <h1 class="pge-welcome-page__call__title">BEM VINDO AO FUTURO PEQUENA ESTRELA</h1>

            @include('Client.components.anchors.cmp-anc-04', [
                'text' => 'Avance Aqui',
                'url' => route('signup'),
                'target' => '_self',
            ])
        </div>

    </section>
@endsection
