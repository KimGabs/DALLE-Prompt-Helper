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

    public function setSort($sort) {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search) {
        $this->search = $search;
    }

    #[Computed()]
    public function myPosts() {
        return Post::published()
        ->orderBy('published_at', $this->sort)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('body', 'like', "%{$this->search}%")
                  ->orWhere('category', 'like', "%{$this->search}%");;
        })
        ->where('user_id', Auth::id())
        ->paginate(4);
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
