<?php

namespace App\Http\Livewire;

use App\Lib\Coingecko;
use Livewire\Component;

/**
 * Coin component
 *
 * @property array $coin
 * @property string $currency
 * @property array $listeners
 */
class Coin extends Component
{
    /** @var array Coin courant */
    public array $coin;

    /** @var string Devise courante */
    public string $currency = 'eur';

    /** @var string[] Listeners */
    protected $listeners = ['currency' => 'changeCurrency'];

    /**
     * @inheritDoc
     */
    public function mount($coinId)
    {
        $this->coin = Coingecko::coin($coinId);
    }

    /**
     * Redirection vers la liste des markets
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function goToMarketList()
    {
        return redirect('/');
    }

    /**
     * Modifie la devise courante
     *
     * @param string $currency
     * @return void
     */
    public function changeCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('livewire.coin');
    }
}
