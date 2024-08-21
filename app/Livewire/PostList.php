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

    public function mount($id)
    {
        $this->userId = $id;
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
        if (!$this->userId) {
            return redirect()->route('parameters.index')->with('success', $this->userId);
            return collect();
        }

        return Post::published()
        ->where('user_id', $this->userId)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('category', 'like', "%{$this->search}%")
                  ->orWhere('body', 'like', "%{$this->search}%");
        })
        ->orderBy('published_at', $this->sort)
        ->paginate(9);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
