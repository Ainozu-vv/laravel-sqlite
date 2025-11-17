@props([
  'type' => 'success',
  'colors' => [
    'success' => 'bg-green-400',
    'unsuccessful' => 'bg-red-400',
    'doubtful' => 'bg-gray-400'
  ]
])

<section {{
  $attributes->merge([
    'class' => "{ $colors[$type] } p-4 mb-6"
  ])
}}>
  <div class="container">
    {{ $slot }}
  </div>
</section>
