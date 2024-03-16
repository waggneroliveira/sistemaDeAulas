<div class="cmp-inp-email">
  <label for="{{ $name }}" class="cmp-inp-email__label">{{ $placeholder }}</label>
  <input value="{{isset($value) ? $value : ''}}" {{$required ? 'required' : ''}} type="email" id="{{ $name }}" name="{{ $name }}" class="cmp-inp-email__input {{ isset($maskClass) ? $maskClass : ''}} watchFocus">
</div>
