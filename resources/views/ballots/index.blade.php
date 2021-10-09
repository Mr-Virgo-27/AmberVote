@extends('layouts.app')

@section('content')
<!-- component -->
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
  <div class="containter mx-auto px-20">
    <div class="bg-white p-8 rounded-lg shadow-lg relative hover:shadow-2xl transition duration-500">
      <h1 class="text-2xl text-gray-800 font-semibold mb-3">Create your Election</h1>
      <p class="text-gray-600 leading-6 tracking-normal">Get started by adding your questions</p>
      <form>
  <button formaction="" class="py-2 px-4 mt-8 bg-green-600 hover:bg-green-400
 text-white rounded-md shadow-xl">Import Questions</button>
   <button formaction="{{ url('/Add/BallotQuestions') }}" class="py-2 px-4 mt-8 bg-blue-600 hover:bg-blue-400 text-white rounded-md shadow-xl">Add Quesstions</button>
   </form>
      <div>
        {{-- <span class="absolute py-2 px-8 text-sm text-white top-0 right-0 bg-indigo-600 rounded-md transform translate-x-2 -translate-y-3 shadow-xl">New</span> --}}
      </div>
    </div>
  </div>
</div>

@endsection