<?php

namespace App\Http\Livewire\Customer;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class AllStoreCard extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1]
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.customer.all-store-card', [
            'stores' => $this->search == null ?
                Store::with(['review'])->orderBy('is_open', 'desc')->paginate(16) :
                Store::with(['review'])->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->paginate(8)
        ]);
    }
}
