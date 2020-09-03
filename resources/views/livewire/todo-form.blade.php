<div class="flex mx-4 border-2 border-gray-300 rounded-lg">
    <input 
        class="flex-grow px-2 rounded-l-lg"
        type="text"
        wire:model="title"    
    >
    <button
        class="p-2 text-gray-800 rounded-r-lg bg-gray-100"
        wire:click="addTodo()"
    >
        Add
    </button>
</div>