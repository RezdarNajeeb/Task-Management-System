@props(['label', 'name', 'resize' => false, 'currentValue' => null])

@php
  $defaults = [
      'id' => $name,
      'name' => $name,
      'class' =>
          'w-full bg-gray-900 text-gray-100 rounded-lg p-2 ' .
          ($errors->has($name) ? 'border-red-500 ' : 'border-gray-700 ') .
          ($resize ? 'resize' : 'resize-none'),
      'rows' => '3',
  ];
@endphp

<x-forms.field :$label :$name>
  <textarea {{ $attributes($defaults) }}>{{ old($name, $currentValue) }}</textarea>
</x-forms.field>
