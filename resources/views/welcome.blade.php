<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Bradavice
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($colleges as $college) 
                    <div class="kolej">
                        <span>{{ $college->nazev }}</span>
                        <div class="bodovani_sede">
                            <div class="body"></div>
                        </div>
                        <span>{{ $college->body }}</span>                        
                        <img src="{{ asset('images/' . $college->cesta_obrazek) }}" alt="kolej X">
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
