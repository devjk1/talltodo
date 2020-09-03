@extends('layouts.app')

@section('content')

<div class="h-screen w-screen flex flex-col">
    <!-- TOP SECTION -->
    <div class="bg-white flex-grow">
        <div class="p-4 text-4xl font-bold text-gray-900">
            My Tasks
        </div>
        <div class="container mx-auto mt-8">
            <div class="text-gray-400 font-medium text-lg tracking-wider">
                TO-DO
            </div>
            <!-- INSERT LIST COMPONENT -->
            @livewire('todo-list')
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="bg-gray-200 h-32">
        <div class="px-4 pt-4 text-gray-900 text-lg">
            New Task
        </div>
        <!-- INSERT LIST FORM COMPONENT -->
        @livewire('todo-form')
    </footer>
</div>

@endsection
