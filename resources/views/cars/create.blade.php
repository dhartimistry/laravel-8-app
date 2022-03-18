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
                Create car    
            </h1>
        </div>
    </div>

    <div class="flex">
        <form action="/cars" method="POST">
        @csrf
            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="name"
                    placeholder="Brand name...">
            </div>

            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="founded"
                    placeholder="Founded...">
            </div>

            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="description"
                    placeholder="Description...">
            </div>

            <button type="submit" class="bg-green-500 block shadow-5xl mb p-2 w-80 uppercase font-bold">
                Submit
            </button>
        </form>
    </div>


@endsection