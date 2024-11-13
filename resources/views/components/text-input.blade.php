@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-white placeholder-white text-white bg-transparent focus:border-button
focus:border-button rounded-md'])
 }}>
