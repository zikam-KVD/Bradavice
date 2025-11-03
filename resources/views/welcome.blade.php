<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Bradavice
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="koleje-wrapper bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @foreach($colleges as $college) 
                    <div class="kolej">
                        <span style="color: {{ $college->barva }}">
                            {{ $college->nazev }}
                        </span>
                        <div class="bodovani_sede">
                            <div 
                            class="body" 
                            style="background-color: {{ $college->barva }}; 
                            height: {{ $kouzelnaPro * $college->body }}px">
                        </div>
                        </div>
                        <span style="color: {{ $college->barva }}">
                            {{ $college->body }}
                        </span>                        
                        <img src="{{ asset('images/' . $college->cesta_obrazek) }}" alt="kolej X">
                    </div>                    
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
