<div class="p-16 flex justify-center gap-6 items-center">
    <button wire:click="increment" class="py-2 px-4 bg-purple-400 hover:bg-purple-600 focus:bg-purple-600 rounded text-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="py-2 px-4 bg-purple-400 hover:bg-purple-600 focus:bg-purple-600 rounded text-white">-</button>
</div>
