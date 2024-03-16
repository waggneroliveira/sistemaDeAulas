@extends('Client.core.LAYOUTS.main')
@section('content')
<section class="pge-login">
  <main class="pge-login__main">

    <form action="" class="pge-login__form">

      <img src="" alt="" class="pge-login__form">

      @include('Client.components.inputs.cmp-inp-email', [
          'placeholder' => 'Email',
          'name' => 'email',
          'required' => false,
          'value'=> ''
      ])

      @include('Client.components.inputs.cmp-inp-password', [
          'placeholder' => 'Senha',
          'name' => 'senha',
          'required' => false,
          'value'=> ''
      ])

    </form>

  </main>

  <img src="" alt="" class="pge-login__banner">
</section>
@endsection
