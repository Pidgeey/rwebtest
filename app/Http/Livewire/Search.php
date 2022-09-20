<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Search component
 *
 * @property string $query
 */
class Search extends Component
{
    /** @var string query search */
    public $query;

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('livewire.search');
    }
}
