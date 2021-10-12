@extends('layouts.app')
@section('title')
    Add Ballot Question
@endsection
@section('content')
<div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('AddBQ')}}" method="post" >
        @CSRF
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="question">
                Question
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="question" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Max Response
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="max_res">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Min Response
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="min_res">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Description
            </label>
            {{--            <input class="shadow-outlinehadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="desc">--}}
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="desc"></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-600 hover:bg-blue-400" type="Submit"> Submit </button>
            <button class=" bg-red-600 hover:bg-red-400" type="Reset"> Clear </button>
        </div>
    </form>

</div>
@endsection
