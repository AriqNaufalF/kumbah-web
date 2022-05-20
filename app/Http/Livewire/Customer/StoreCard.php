<?php

namespace App\Http\Livewire\Customer;

use App\Models\Store;
use Livewire\Component;

class StoreCard extends Component
{
    public $search;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        return view('livewire.customer.store-card',  [
            'stores' => $this->search == null ?
                Store::take(4)->whereIn('is_open', [1])->get() :
                Store::take(4)->whereIn('is_open', [1])->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->get()
        ]);
    }
}
