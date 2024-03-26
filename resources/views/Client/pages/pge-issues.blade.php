@extends('Client.core.LAYOUTS.main')
@section('content')
<section class="pge-issues">
  <header class="pge-issues__header">
    <h1 class="pge-issues__header__title">MEUS CURSOS</h1>

    <form action="" class="pge-issues__header__hoom">
      @include('Client.components.inputs.cmp-inp-search-submit',[
        'name' => 'search',
        'required' => true,
        'placeholder' => 'Procurar'
      ])
    </form>

  </header>
  <main>
    @include('Client.components.cards.cmp-crd-issue')
  </main>
</section>
@endsection
