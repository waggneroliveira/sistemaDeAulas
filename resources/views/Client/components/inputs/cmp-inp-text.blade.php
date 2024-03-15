<div class="cmp-inp-text">
    <label for="{{ $name }}" class="cmp-inp-text__label">{{ $placeholder }}</label>
    <input value="{{isset($value) ? $value : ''}}" {{$required ? 'required' : ''}} type="text" id="{{ $name }}" name="{{ $name }}" class="cmp-inp-text__input {{ isset($maskClass) ? $maskClass : ''}} watchFocus">
</div>
