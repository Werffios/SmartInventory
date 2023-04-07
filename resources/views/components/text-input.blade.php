@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'placeholder-gray-300 transition duration-500 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-unal dark:focus:border-green-unal focus:ring-green-unal dark:focus:ring-green-unal rounded-md shadow-sm']) !!}>
