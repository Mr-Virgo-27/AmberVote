@extends('layouts.app')
@section('title')
    Update Ballot Question
@endsection
@section('content')
<div class="bg-gray-200 py-8 px-2 sm:py-10 sm:px-6  lg:px-2 flex justify-center items-center ">
<div class="w-full max-w-xs">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     <form  action="{{url('dashboard/Update/BallotQuestion')}}" method="post" >
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <input type="hidden" name="ballot_id" value="{{$data->ballot_id}}">

         <div class="mb-4">
             <label class="py-2 pl-13 font-bold text-gray-700">Update new question</label>
         </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="question">
                Question
            </label>
            <input value="{{$data->question}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="question" >
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="question"> Max Response </label>
            <input value="{{$data->max_res}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="number" name="max_res" >
        </div>

         <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="question"> Minimum Response </label>
            <input value="{{$data->min_res}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="number" name="min_res" >
        </div>

         <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="question"> Desc </label>
            <input value="{{$data->desc}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="desc" >
        </div>

        <div class="flex justify-center items-center">
            <button class="p-2 pl-5 pr-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100" type="Submit"> Update </button>
        </div>
    </form>
    <a class="flex justify-center items-center" href="{{route('BQ',$data->ballot_id)}}"> <button  class="p-2 pl-5 pr-5 bg-red-600 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300 hover:bg-red-400 hover:text-gray-100" > Cancel </button></a>
</div>

    @if(session()->has('update'))
        <div class="flex bg-green-400 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
            <div>
                <span class="font-medium">Alert</span> {{session('update')}}
            </div>
        </div>
    @endif
</div></div>
@endsection
