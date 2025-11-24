<x-app-layout>
  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <p>Počet kolejí: {{ count($koleje) }}</p>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-4">
                @foreach($koleje as $kolej)
                <form method="POST" action="{{ route('admin.edit', ['id' => $kolej->id]) }}" class="w-full flex justify-between items-center">
                    @csrf
                    {{--  koment v blade --}}
                    <!-- koment v html -->
                    <div>
                        <x-input type="text" id="nazev" name="nazev" value="{{ $kolej->nazev }}" required />
                        <x-input-error for="nazev" />
                    </div>
                    <div>
                        <input type="number" name="body" value="{{ $kolej->body }}">
                    </div>
                    <div>
                        <input type="color" name="barva" value="{{ $kolej->barva }}">
                    </div>
                    <div>
                        <img
                            src="{{ asset('images/' . $kolej->cesta_obrazek) }}"
                            alt="logo koleje"
                            style="width:75px"
                        >
                    </div>
                    <div>
                        <x-button>
                            Uprav
                        </x-button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
