@extends('Client.core.LAYOUTS.main')
@section('content')
    <section class="wellcome">


        @include('Client.components.anchors.cmp-anc-one', [
            'text' => 'Continuar',
            'url' => route('home'),
            'target' => '_blank',
        ])
    </section>
@endsection
