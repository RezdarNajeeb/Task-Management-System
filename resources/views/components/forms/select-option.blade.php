@props(['value', 'currentValue' => null])

<option value="{{ $value }}" @selected($currentValue == $value)>{{ $value }}</option>
