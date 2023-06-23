<div class="row">
    <h5 class="col-6 mx-3">Ingredients</h5>

    @foreach($ingredients as $index=> $ingredient)
        <div class="col-6">
            <input type="text" class="form-control" name="ingredients[{{$index}}][ingredient_name]" placeholder="e.g 2 cups flour,sifted" wire:model="ingredients.{{$index}}.ingredient_name">
        </div>
        <div class="col-6 mt-3">
            <a class="text-danger" href="" wire:click.prevent="removeIngredient({{$index}})">Delete</a>
        </div>
    @endforeach


    <div class="col-4 p-2">
        <button class="btn-lightGreen btn mt-30" wire:click.prevent="addIngredient">+ ADD INGREDIENT</button>
    </div>
</div>
