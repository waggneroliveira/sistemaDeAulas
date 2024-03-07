<div class="cmp-inp-text">
    <label for="{{ $name }}" class="cmp-inp-text__label">{{ $placeholder }}</label>
    <input {{$required ? 'required' : ''}} type="text" id="{{ $name }}" name="{{ $name }}" class="cmp-inp-text__input {{$maskClass}} watchFocus">
</div>
