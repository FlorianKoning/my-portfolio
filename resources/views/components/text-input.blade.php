@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-title focus:border-title focus:ring-title rounded-md shadow-sm']) }}>
