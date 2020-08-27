@extends('layouts.app')

@section('content')
<div x-data="{ isOpen: false }">
    <button @click="isOpen = !isOpen">
        Toggle
    </button>
    <h1 x-show="isOpen">
        index.html
    </h1>
</div>
@endsection
