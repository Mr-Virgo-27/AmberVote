@extends('layouts.app')
@section('title')
    Update Ballot
@endsection
@section('content')
<div class="w-full max-w-xs">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     <form  action="{{route('UpdateBQ')}}" method="post" >
        @CSRF
{{--         <div class="mb-4">--}}
{{--             <label class="block text-gray-700 text-sm font-bold mb-2">--}}
{{--                 Select a Question--}}
{{--             </label>--}}
{{--             <select name="quest_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">--}}
{{--                 <option value=''>Select Question</option>--}}
{{--                 @foreach($data as $info)<option value="{{$info->id}}">{{$info->Question}}</option> @endforeach--}}
{{--             </select>--}}
{{--         </div>--}}
         <input type="hidden" name="id" value="{{$data->id}}">

         <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Option
             </label>
             <input value="{{$data->option}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="option">
         </div>

         <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Max Response
             </label>
             <input  value="{{$data->max_res}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="max_res">
         </div>

         <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Min Response
             </label>
             <input value="{{$data->min_res}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="min_res">
         </div>

         <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Photo
             </label>
             <input value="{{$data->photo}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="photo">
         </div>

         <div class="mb-6">
             <label class="block text-gray-700 text-sm font-bold mb-2" >
                 Description
             </label>
             {{--            <input class="shadow-outlinehadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="desc">--}}
             <textarea value="{{$data->desc}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="desc" placeholder="Leave empty if you choose not to update"></textarea>
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
