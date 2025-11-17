@props([
  'type' => 'success',
  'colors' => [
    'success' => 'green',
    'danger' => 'red'
  ]
])

<div role="alert">
  <div class="bg-{{ $colors[$type] }}-500 text-white font-bold rounded-t px-4 py-2">
    {{ $title }}
  </div>
  <div class="border border-t-0 border-{{ $colors[$type] }}-400 rounded-b bg-{{ $colors[$type] }}-100 px-4 py-3 text-{{ $colors[$type] }}-700">
    <p>{{ $message }}</p>
    <p>{{ $slot }}</p>
  </div>
</div>
