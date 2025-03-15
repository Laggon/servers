<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-select" id="{{ $name }}" name="{{ $name }}">
        @foreach ($options as $val => $label)
            <option value="{{ $val }}" {{ $value == $val ? 'selected' : '' }} >{{ $label }}</option>
        @endforeach
    </select>
</div>
