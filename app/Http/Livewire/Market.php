<?php

namespace App\Http\Livewire;

use App\Lib\Coingecko;
use Livewire\Component;

/**
 * Market component
 *
 * @property array $listeners
 * @property array $list
 */
class Market extends Component
{
    /** @var string[] Listeners */
    protected $listeners = [
        'search' => 'querySearch',
        'refresh' => 'index',
        'currency' => 'refreshByCurrency'
    ];

    /** @var array Liste des markets courants */
    public array $list = [];

    /**
     * @inheritDoc
     */
    public function mount()
    {
        $this->index();
    }

    /**
     * Permets la recherche de query search sur les coins
     *
     * @param string $query
     * @return void
     */
    public function querySearch(string $query)
    {
        if (empty($query)) return;

        $coins = Coingecko::search($query)['coins'];
        $ids = '';
        foreach ($coins as $coin) {
            $ids = sprintf("%s,%s", $ids, $coin['id']);
        }

        $this->list = Coingecko::coinMarket(['ids' => $ids]);
    }

    /**
     * Récupère une liste de market en fonction des paramètres de recherche
     *
     * @param array $parameters
     * @return void
     */
    public function index(array $parameters = [])
    {
        $this->list = Coingecko::coinMarket($parameters);
    }

    /**
     * Récupération d'une liste de markets fixé sur une devise donnée
     *
     * @param string $currency
     * @return void
     */
    public function refreshByCurrency(string $currency)
    {
        $this->index(['vs_currency' => $currency]);
    }

    /**
     * Redirection vers le template du détail d'un coin
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function temp($id)
    {
        return redirect("/coins/{$id}");
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('livewire.market');
    }
}
