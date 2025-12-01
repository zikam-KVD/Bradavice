<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        Počet kolejí: {{ count($koleje) }}
    </div>

    <div class="flex justify-between bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-4">
        @foreach ($koleje as $kolejF)
            <div class="flex flex-col gap-2 text-center">
                <strong>{{ $kolejF->nazev }}</strong>
                <span>{{ $kolejF->body }}</span>
            </div>
        @endforeach
    </div>

    @if(0 != strlen($message))
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-4">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="flex justify-between bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-4">
        <div class="flex flex-col">
            <label for="kolej">Ohodnocená kolej</label>
            <select id="kolej" wire:model.lazy="kolej">
                <option value="0" selected hidden>Vyber kolej</option>
                @foreach ($koleje as $kolejF)
                    <option value="{{ $kolejF->id }}">
                        {{ $kolejF->nazev }}
                    </option>
                @endforeach
            </select>
            <x-input-error for="kolej" />
        </div>
        <div>
            <x-label for="body" value="Počet bodů" />
            <x-input type="number" wire:model.lazy="body" id="body" min="-20" max="20" />
            <x-input-error for="body" />
        </div>
        <div>
            @if(0 != $kolej && null != $body)
            <x-button wire:click="upravBody">
                Uprav body
            </x-button>
            @endif
        </div>
    </div>
</div>
