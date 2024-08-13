<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parameter;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class ParamList extends Component
{

    use WithPagination;
    
    public Parameter $params;
    
    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search) {
        $this->search = $search;
    }

    public function setSort($sort) {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        $this->resetPage();
    }

    #[Computed()]
    public function parameters() {
        return Parameter::CreatedAt()
        ->orderBy('created_at', $this->sort)
        ->where(function ($query) {
            $query->where('name', 'like', "%{$this->search}%")
            ->orWhere('type', 'like', "%{$this->search}%");
        })
        ->paginate(8);
    }

    public function render()
    {
        return view('livewire.param-list');
    }
}
