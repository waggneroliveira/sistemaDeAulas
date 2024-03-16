<div class="cmp-inp-password">
  <label for="{{ $name }}" class="cmp-inp-password__label">{{ $placeholder }}</label>
  <input value="{{isset($value) ? $value : ''}}" {{$required ? 'required' : ''}} type="password" id="{{ $name }}" name="{{ $name }}" class="cmp-inp-password__input {{ isset($maskClass) ? $maskClass : ''}} watchFocus">
</div>
