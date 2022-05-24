<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class LaundryMenu extends Component
{
    public $select = 'service';
    public $services;

    public function mount($store)
    {
        $this->services = $store->service;
    }

    public function render()
    {
        return view('livewire.customer.laundry-menu');
    }
}
