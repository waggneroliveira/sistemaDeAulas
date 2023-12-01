@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="wellcome-page" style="background-image: url({{ asset('Client/assets/images/wellcome-bg.png') }})">

        <div class="wellcome-page__call">
            <h1 class="wellcome-page__title">BEM VINDO AO FUTURO PEQUENA ESTRELA</h1>

            @include('Client.components.anchors.cmp-anc-four', [
                'text' => 'Avance Aqui',
                'url' => route('signup'),
                'target' => '_self',
            ])
        </div>

    </section>
@endsection
