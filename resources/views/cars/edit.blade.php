@extends('layouts.app')

<style>
.flex{
    justify-content: center;
}
</style>

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update car    
            </h1>
        </div>
    </div>

    <div class="flex">
        <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="name"
                    value="{{ $car->name }}">
            </div>

            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="founded"
                    value="{{ $car->founded }}">
            </div>

            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="description"
                    value="{{ $car->description }}">
            </div>

            <button type="submit" class="bg-green-500 block shadow-5xl mb p-2 w-80 uppercase font-bold">
                Submit
            </button>
        </form>
    </div>


@endsection