@extends('layouts.app')

@section('content')

<!-- component -->
<div class="bg-gray-200">
    <div class="flex flex-col items-center justify-center h-screen">
      <div>
        <H1></H1>
      </div>
        <div class="flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-red-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-yellow-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-teal-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>

            <label class="inline-flex items-center mt-3">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-pink-600" checked><span class="ml-2 text-gray-700">label</span>
            </label>
        </div>
    </div>
</div>

@endsection