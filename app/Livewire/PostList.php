<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';
    
    #[Url()]
    public $search = '';

    public $userId;

    public function mount()
    {
        $this->userId = Auth::id();
    }

    public function setSortPost($sort) {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search) {
        $this->search = $search;
    }

    public function clearFilters(){
        $this->search='';
        // $this->category = '';
        $this->resetPage();
    }

    #[Computed()]
    public function myPosts() {
        // return redirect()->route('parameters.index')->with('success', $this->userId);
        if (!$this->userId) {
            return redirect()->route('parameters.index')->with('success', $this->userId);
            return collect(); // Return an empty collection or handle appropriately
        }

        return Post::published()
        ->where('user_id', $this->userId)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('category', 'like', "%{$this->search}%");
        })
        ->orderBy('published_at', $this->sort)
        ->paginate(6);
    }

    #[Computed()]
    public function posts() {
        return Post::published()
        ->orderBy('published_at', $this->sort)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('body', 'like', "%{$this->search}%")
                  ->orWhere('category', 'like', "%{$this->search}%");
        })
        ->paginate(4);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
