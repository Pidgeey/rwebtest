<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Currency component
 *
 * @property string $currency
 */
class Currency extends Component
{
    public string $currency = "";

    /**
     * Déclanche un évènement lors d'un changement de devise
     *
     * @return void
     */
    public function emitCurrency()
    {
        $this->emit('currency', $this->currency);
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('livewire.currency');
    }
}
