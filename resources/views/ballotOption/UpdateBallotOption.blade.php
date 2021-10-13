@extends('layouts.app')
@section('title')
    Update Ballot
@endsection
@section('content')
<div class="bg-gray-200 py-8 px-2 sm:py-10 sm:px-6  lg:px-2 flex justify-center items-center ">
<div class="bg-gray-200  w-full max-w-xs">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     <form  action="{{route('UpdateBO')}}" method="post" enctype="multipart/form-data">
        @CSRF
         <input type="hidden" name="quest_id" value="{{$data->ballot_question_id}}">
         <input type="hidden" name="id" value="{{$data->id}}">
         <div class="mb-4">
             <label class="py-2 pl-16 font-bold text-gray-700">Update option</label>
         </div>
         <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Option
             </label>
             <input value="{{$data->option}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="option">
             @error('option')
             <span style="color:red"> {{"Field cannot be empty."}} </span>
             @enderror
         </div>

         <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Photo
             </label>
               <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="photo">
                @error('photo')
             <span style="color:red"> {{"Please update an image."}} </span>
                @enderror
         </div>

         <div class="mb-6">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Description
             </label>
             <input value="{{$data->opts_desc}}" class="shadow-outline shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="desc">
             @error('desc')
             <span style="color:red"> {{"Field cannot be empty."}} </span>
             @enderror
             {{--             <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="desc" placeholder="Leave empty if you choose not to update"></textarea>--}}
         </div>

        <div class="flex justify-center items-center">
            <button class="p-2 pl-5 pr-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100" type="Submit"> Update </button>
        </div>
    </form>
    <a class="flex justify-center items-center" href="{{route('BO',$data->ballot_question_id)}}"> <button class=" p-2 pl-5 pr-5 bg-red-600 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300 hover:bg-red-400 hover:text-gray-100"> Cancel </button></a>
</div>

    @if(session()->has('update'))
        <div class="flex bg-green-400 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
            <div>
                <span class="font-medium">Alert</span> {{session('update')}}
            </div>
        </div>
    @endif
</div>
</div>
@endsection
