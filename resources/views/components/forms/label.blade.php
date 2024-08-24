@props(['name', 'label'])

<label {{ $attributes(['class' => 'block text-gray-400 font-medium mb-2', 'for' => $name]) }}>
  {{ $label }}
</label>
