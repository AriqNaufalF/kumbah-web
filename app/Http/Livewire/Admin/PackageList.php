<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class PackageList extends Component
{
    public $services, $service_id, $name, $price, $unit;
    private $service;

    // select id to delete
    public function del($id)
    {
        $this->service_id = $id;
    }

    // clear value 
    public function clear()
    {
        $this->service_id = '';
        $this->service = '';
        $this->name = '';
        $this->price = '';
        $this->unit = '';
    }

    // show data from to edit
    public function edit($id)
    {
        $this->service = Service::find($id);
        $this->service_id = $this->service->id;
        $this->name = $this->service->name;
        $this->price = $this->service->price;
        $this->unit = $this->service->unit;
    }

    // Take services property from pacangelist.blade
    public function mount($services)
    {
        $this->services = $services;
    }

    public function render()
    {
        return view('livewire.admin.package-list');
    }
}
