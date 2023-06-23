<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ingredients extends Component
{
    public $ingredients = [];

    public function mount(){
        $this->ingredients =[
            ['ingredient_name'=>'']
        ];
    }

    public function addIngredient(){
        $this->ingredients[] =
            ['ingredient_name'=>''];
    }

    public function removeIngredient($index){
            unset($this->ingredients[$index]);
            array_values($this->ingredients);
    }

    public function render()
    {
        return view('livewire.ingredients');
    }
}
