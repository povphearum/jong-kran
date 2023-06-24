<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use function Symfony\Component\Translation\t;

class Ingredients extends Component
{
    public $ingredients = [];
    /**
     * @var true
     */

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
        $this->ingredients = array_values($this->ingredients);
    }

    public function render()
    {
        return view('livewire.ingredients');
    }

    public function saveform(){
        $recipe = Recipe::create();

        foreach ($this->ingredients as $ingredient) {
            $recipe->ingredients()->create(['ingredient_name'=>$ingredient]);

        }
        $this->reset('ingredients','');
        $this->saved = TRUE;
    }
}
