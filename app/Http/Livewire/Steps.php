<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Steps extends Component
{
    public $steps = [];

    public function mount(){
        $this->steps =[
            ['step'=>'']
        ];
    }

    public function addStep(){
        $this->steps[] =
            ['step'=>''];
    }

    public function removeStep($index){
        unset($this->steps[$index]);
        array_values($this->steps);
    }

    public function render()
    {
        return view('livewire.steps');
    }
}
