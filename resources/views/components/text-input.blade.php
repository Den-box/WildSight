@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-white text-white bg-transparent focus:border-cyan-400 focus:border-cyan-400 rounded-md'])
 }}>
