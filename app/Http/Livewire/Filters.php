<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Filters component
 *
 * @property array $filters
 * @property string $filterSelected
 */
class Filters extends Component
{
    public array $filters = [
        "market_cap_desc" => "Market cap décroissant",
        "market_cap_asc" => "Market cap croissant",
    ];

    /** @var string Filtre courant */
    public string $filterSelected = "";

    /**
     * Déclanche un évènement lors d'un changement de filtre de tri
     *
     * @return void
     */
    public function change()
    {
        $this->emit('refresh', ['order' => $this->filterSelected]);
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('livewire.filters');
    }
}
