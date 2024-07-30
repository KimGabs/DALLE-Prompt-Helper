<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class SubmitModal extends Component
{
    use WithFileUploads;
    public $image;

    public function render()
    {
        return view('livewire.submit-modal');
    }

    
}
