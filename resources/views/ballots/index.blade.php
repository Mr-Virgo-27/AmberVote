@extends('layouts.app')

@section('content')
<!-- component -->
<div class="min-h-screen bg-gray-100 ">
    <div class="flex justify-center items-center">

    <div class=" mt-5 bg-white p-8 rounded-lg shadow-lg  hover:shadow-2xl ">
      <h1 class="text-2xl text-gray-800 font-semibold mb-3">Create your Ballot</h1>
      <p class="text-gray-600 leading-6 tracking-normal">Get started by adding your questions</p>
      <form>
  <button formaction="" class="py-2 px-4 mt-8 bg-green-600 hover:bg-green-400
 text-white rounded-md shadow-xl">Import Questions</button>
   <button formaction="{{ route('ballotsType', $election->id) }}" class="py-2 px-4 mt-8 bg-blue-600 hover:bg-blue-400 text-white rounded-md shadow-xl">Add Questions</button>
   </form>
      <div>
        {{-- <span class="absolute py-2 px-8 text-sm text-white top-0 right-0 bg-indigo-600 rounded-md transform translate-x-2 -translate-y-3 shadow-xl">New</span> --}}
      </div>
    </div>
  </div>

</div>
@endsection
