@extends('layouts.app')
@section('title')
    Update Ballot Question
@endsection
@section('content')
<div class="w-full max-w-xs">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     <form  action="{{route('UpdateBQ')}}" method="post" >
        @CSRF
        <input type="hidden" name="id" value="{{$data->id}}">

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="question">
                Question
            </label>
            <input value="{{$data->Question}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="question" >
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-600 hover:bg-blue-400" type="Submit"> Update </button>
        </div>
    </form>
    <a href="{{route('ViewBQ')}}"> <button  class=" bg-red-600 hover:bg-red-400"> Cancel </button></a>
</div>

    @if(session()->has('update'))
        <div class="flex bg-green-400 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
            <div>
                <span class="font-medium">Alert</span> {{session('update')}}
            </div>
        </div>
    @endif
</div>
@endsection
