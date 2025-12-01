<?php

namespace App\Livewire;

use App\Models\College;
use Livewire\Component;

class ContainerColleges extends Component
{
    /** @var Collection $koleje */
    public $koleje;
    /** @var int $kolej */
    public $kolej = 0;
    /** @var null|int $body */
    public $body = null;

    public string $message;

    public function mount()
    {
        $this->koleje = College::all();
    }

    public function upravBody()
    {
        $this->validate([
            'kolej' => "required|exists:colleges,id",
            'body' => "required|int|min:-20|max:20",
        ]);

        $tmpKolej = College::find($this->kolej);
        $tmpKolej->body += $this->body;
        $tmpKolej->save();

        $this->message = "$tmpKolej->nazev dostala $this->body bodů.";

        //reset zadanych veci
        $this->kolej = 0;
        $this->reset(['body']);

        $this->mount();
    }

    public function render()
    {
        return view('livewire.container-colleges');
    }
}
