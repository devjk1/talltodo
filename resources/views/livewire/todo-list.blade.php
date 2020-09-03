<div>
    <div class="grid grid-cols-12 border-2 border-gray-300 rounded-lg mt-2 divide-y-2 divide-gray-300">
        @foreach($todos as $todo)
        <div class="flex items-center col-span-12 px-4 py-2">
            <div 
                class="col-span-11 text-lg text-gray-700"
            >
                {{ $todo->title }}
            </div>
            <!-- Cannot pass in model to completeTodo() -->
            <input 
                class="col-start-12 col-end-13 ml-auto"
                type="checkbox"
                wire:change="completeTodo({{ $todo->id }})"
            >
        </div>
        @endforeach
    </div>
</div>
