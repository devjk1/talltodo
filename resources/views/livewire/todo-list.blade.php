<div>
    <div class="text-gray-400 font-medium text-lg tracking-wider">
        TO-DO
    </div>
    <div class="grid grid-cols-12 border-2 border-gray-300 rounded-lg mt-2 divide-y-2 divide-gray-300">
        @foreach($todos as $todo)
        
        @if(! $todo->is_completed)
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
        @endif

        @endforeach
    </div>
    <!-- COMPLETED -->
    <div class="mt-8 text-gray-400 font-medium text-lg tracking-wider">
        COMPLETED
    </div>
    <!-- COMPLETED LIST -->
    <div class="flex flex-col border border-gray-200 rounded-lg mt-2 divide-y divide-gray-200">
        @foreach($todos as $todo)

        @if($todo->is_completed)
        <div 
            class="line-through px-4 py-2 text-lg text-gray-500"
        >
            {{ $todo->title }}
        </div> 
        @endif

        @endforeach
    </div>
</div>
