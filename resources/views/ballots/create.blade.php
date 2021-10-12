@extends('layouts.app')

@section('content')

<!-- component -->
<div class="  h-screen bg-gray-200">
{{--  <div class="container">--}}
      @if(session()->has('Error'))
          <div class="flex bg-red-400 rounded-lg p-4 mb-4 text-sm text-white" role="alert">
              <div>
                  <span class="font-medium">Alert</span> {{session('Error')}}
              </div>
          </div>
      @endif
      <div class="flex justify-center p-4  mb-10">
        <h1 class="text-xl text-blue-500 mt-5">Type of Ballot </h1>
      </div>
      <div class="flex justify-center">
            <div class="bg-white shadow-xl m-auto rounded-lg w-1/2">
                <ul class="divide-y divide-gray-300">
                  <div>
                    <li class="p-4 text-center text-grey-800 hover:bg-gray-50 cursor-pointer">Mulitple Choice</li>
{{--                    <form method="POST" action="{{ route('storeBallot') }}">--}}
{{--                      @csrf--}}
{{--                      <input type="hidden" name="election_id" value="{{ $election->id}}">--}}
                     <a href="{{url('dashboard/ballotType/'.$election->id)}}"><button class=" flex justify-center items-center py-2 px-4 mt-5 mb-5 bg-green-600 m-auto hover:bg-green-400
 text-white rounded-md shadow-xl">Select</button></a>
{{--                    </form>--}}
                    </div>

{{--                    <div>--}}
{{--                    <li class="p-4 hover:bg-gray-50 cursor-pointer">Ranked Choice </li>--}}
{{--                    <form method="POST" form="{{ route('storeBallot') }}">--}}
{{--                      @csrf--}}
{{--                      <input type="hidden" name="election_id" value="{{ $election->id }}">--}}
{{--                      <button type="submit" class="py-2 px-4 mt-8 bg-green-600 hover:bg-green-400--}}
{{-- text-white rounded-md shadow-xl"  name="ballot_type" value="Ranked Choice">Select</button>--}}
{{--                    </form>--}}
{{--                    </div>--}}
                </ul>
            </div>
        </div>
  </div>
{{--</div>--}}

@endsection
