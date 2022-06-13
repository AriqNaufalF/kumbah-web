<?php

namespace App\Http\Livewire\Customer;

use App\Models\Store;
use Livewire\Component;

class StoreCard extends Component
{

    public $search;
    public $location;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function mount($location)
    {
        $this->location = $location->cityName;
    }

    public function render()
    {
        return view('livewire.customer.store-card',  [
            'stores' => $this->search == null ?
                Store::take(4)->with(['review'])->where([
                    ['address', 'like', '%' . $this->location . '%'],
                    ['is_open', 1]
                ])->get() :
                Store::take(4)->with(['review'])->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->get()
        ]);
    }
}
