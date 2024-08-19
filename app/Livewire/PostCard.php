<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;

class PostCard extends Component
{
    public Post $post;
    public $perPage = 18;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search) {
        $this->search = $search;
    }

    #[Computed()]
    public function posts() 
    {
        return Post::published()
        ->orderBy('published_at', $this->sort)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('body', 'like', "%{$this->search}%")
                  ->orWhere('category', 'like', "%{$this->search}%")
                  ->orWhere('ai_model', 'like', "%{$this->search}%");
        })->take($this->perPage)->get();
    }

    #[On('loadMore')]
    public function loadMore()
    {
        $this->perPage += 8;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.post-card', [
            'posts' => $this->posts(),
        ]);
    }
}
