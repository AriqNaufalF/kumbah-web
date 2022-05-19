<?php

namespace App\Http\Livewire\Customer;

use App\Models\Service;
use Livewire\Component;

class LaundryMenu extends Component
{
    public $select = 'service';
    public $services;

    public function mount($store)
    {
        $this->services = Service::orderBy('name', 'asc')
            ->where('store_id', 'like', '%' . $store->id . '%')->get();
    }

    public function render()
    {
        return view('livewire.customer.laundry-menu');
    }
}
