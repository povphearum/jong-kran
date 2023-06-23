<div class="row">
    <h5 class="col-6 mx-3">Direction:</h5>

    @foreach($steps as $index=> $step)
        <div class="col-6">
            <input type="text" class="form-control" name="steps[{{$index}}][step]" placeholder="ex: turn on the heat" wire:model="steps.{{$index}}.step">
        </div>
        <div class="col-6 mt-3">
            <a class="text-danger" href="" wire:click.prevent="removeStep({{$index}})">Delete</a>
        </div>
    @endforeach


    <div class="col-4 p-2">
        <button class="btn-lightGreen btn mt-30" wire:click.prevent="addStep">+ ADD STEP</button>
    </div>
</div>
