<div class="flex flex-col items-center">
    <div class="flex p-16 mx-auto justify-center items-center gap-4">
        <input type="number" wire:model="num1" placeholder="Number 1">
        <select class="w-24" wire:model="action">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" wire:model="num2" placeholder="Number 2">
        <button wire:click="calculate"
                class="py-2 px-4 bg-purple-400 hover:bg-purple-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
            {{ $disabled ? ' disabled' : ''}}>=
        </button>
    </div>
    <p class="text-3xl">{{$result}}</p>
</div>
