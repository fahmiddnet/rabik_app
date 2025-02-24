@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'form-control border border-secondary rounded shadow-sm']) }}>
