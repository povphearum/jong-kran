<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Steps extends Component
{
    public $directions = [];

    public function mount(){
        $this->directions =[
            ['step'=>'']
        ];
    }

    public function addStep(){
        $this->directions[] =
            ['step'=>''];
    }

    public function removeStep($index){
        unset($this->directions[$index]);
        $this->directions = array_values($this->directions);
    }

    public function render()
    {
        return view('livewire.steps');
    }
}
