<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class UserList extends Component
{
    use WithPagination;

    public User $users_; 

    #[Url()]
    public $sort = 'asc';

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
    public function users() {
        return User::CreatedAt()
        ->orderBy('created_at', $this->sort)
        ->where(function ($query) {
            $query->where('name', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%");
        })
        ->paginate(8);
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
