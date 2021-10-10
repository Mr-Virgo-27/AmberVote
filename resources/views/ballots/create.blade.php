@extends('layouts.app')

@section('content')

<!-- component -->
<div class="flex items-center justify-center h-screen bg-gray-200">
  <div class="container">

      <div class="flex justify-center p-4 mb-10">
        <h1 class="text-xl text-blue-500">Type of Ballot </h1>
      </div>
      <div class="flex justify-center">
            <div class="bg-white shadow-xl rounded-lg w-1/2">
                <ul class="divide-y divide-gray-300">
                  <div>
                    <li class="p-4 hover:bg-gray-50 cursor-pointer">Mulitple Choice</li>
                    <form method="POST" action="{{ route('storeBallot') }}">
                      <input type="hidden" name="election_id" value="{{ $election->id}}">
                      <button  type="submit" class="py-2 px-4 mt-8 bg-green-600 hover:bg-green-400
 text-white rounded-md shadow-xl" name="ballot_type" value="Mulitple Choice">Select</button>
                    </form>
                    </div>
                    <div>
                    <li class="p-4 hover:bg-gray-50 cursor-pointer">Ranked Choice </li>
                    <form method="POST" form="{{ route('storeBallot') }}">
                      <input type="hidden" name="election_id" value="{{ $election->id }}"
                      <button type="submit" class="py-2 px-4 mt-8 bg-green-600 hover:bg-green-400
 text-white rounded-md shadow-xl"  name="ballot_type" value="Ranked Choice">Select</button>
                    </form>
                    </div>
                </ul>
            </div>
        </div>
  </div>
</div>

@endsection