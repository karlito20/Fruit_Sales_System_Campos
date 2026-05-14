<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fruits') }}
        </h2>
        <div class="flex gap-4">
            <a href="{{ route('fruits.index') }}"><x-secondary-button class="w-full">Show
                    All</x-secondary-button></a>
            <a href="{{ route('fruits.create') }}"><x-primary-button class="w-full">Add
                    Fruit</x-primary-button></a>
        </div>
    </x-slot>

    <div>
        {{ $slot }}
    </div>

</x-app-layout>
