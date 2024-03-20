@extends('Client.core.LAYOUTS.main')
@section('content')
<style>
  .mdl-header,
  .mdl-footer{
    display: none;
  }
</style>
<section class="pge-login">
  <main class="pge-login__main">

    <form action="" class="pge-login__main__form">

      <img src="{{ asset('Client/assets/images/logo-footer.svg') }}" alt="Logo da WHI" class="pge-login__main__form__logo">

      @include('Client.components.inputs.cmp-inp-email', [
          'placeholder' => 'Email',
          'name' => 'email',
          'required' => false,
      ])

      @include('Client.components.inputs.cmp-inp-password', [
          'placeholder' => 'Senha',
          'name' => 'senha',
          'required' => false,
      ])

      <label class="pge-login__main__form__keep-connected">
        <input type="checkbox" name="keep-connected" class='pge-login__main__form__keep-connected__input'> Matenha-me conectado
      </label>

      {{-- TODO: VER COM BACKEND PRA ONDE ESSE LINK LEVA --}}
      <a href="#" class="pge-login__main__form__forgot-password">Esqueci minha senha</a>

      @include('Client.components.buttons.cmp-btn-03', [
        'type' => 'submit',
        'text' => 'Entrar'
      ])

    </form>

    <img src="{{ asset('Client/assets/images/pge-login__banner.png') }}" alt="BACKEND VER POSSIBILIDADE DE PEGAR DESCRIÇÃO NO PAINEL" class="pge-login__main__banner">

  </main>
</section>
@endsection
