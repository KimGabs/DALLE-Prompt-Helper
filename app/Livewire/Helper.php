<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parameter;

class Helper extends Component
{    
    public $parametersByType = [];
    public $buttonTypes = [];
    public $dropdownTypes = [];

    public function mount()
    {
        $parameters = Parameter::all();

        // Excluded from dropdown
        $excludedTypes = [
            'Vibes', 'Styles', 'Lighting', 
            'Artists', 'Colors', 'Materials'
        ]; 

        foreach ($parameters as $parameter) {
            if (in_array($parameter->type, $excludedTypes)) {
                // Collect types for buttons
                if (!isset($this->buttonTypes[$parameter->type])) {
                    $this->buttonTypes[$parameter->type] = [];
                }
                $this->buttonTypes[$parameter->type][] = $parameter;
            } else {
                // Collect types for dropdowns
                if (!isset($this->parametersByType[$parameter->type])) {
                    $this->parametersByType[$parameter->type] = [];
                }
                $this->parametersByType[$parameter->type][] = $parameter;
            }
        }

        // Set dropdown types for dropdown menu
        $this->dropdownTypes = array_keys($this->parametersByType);
        
    }

    public function render()
    {
        return view('livewire.helper');
    }
}
