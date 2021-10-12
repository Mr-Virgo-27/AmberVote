@extends('layouts.app')
@section('label')
    {{ "Edit $election->election_nm election" }}
@endsection

@section('content')
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 my-4" action="{{ route('election.update', $election->id) }}"
            method="post">
            @method('put')
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="election_nm">
                    Election Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="election_nm"
                    value="{{ old('election_nm') ? old('election_nm') : $election->election_nm }}">
                @error('election_nm')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="option">
                    Start Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" name="start" value="{{ old('start') ? old('start') : $election->start_date }}">
                @error('start')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="max_res">
                    End Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" name="end" value="{{ old('end') ? old('end') : $election->end_date }}">
                @error('end')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
                    Description
                </label>
                {{-- <input class="shadow-outlinehadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="desc"> --}}
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="desc">{{ old('desc') ? old('desc') : $election->desc }}</textarea>
                @error('desc')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="p-2 pl-5 pr-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100
"
                    type="submit">
                    Submit
                </button>
                <a href="{{ url()->previous() }}"
                    class="p-2 pl-5 pr-5 bg-red-600 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300 hover:bg-red-400 hover:text-gray-100
"
                    type="submit">
                    Cancel
                </a>
            </div>
        </form>

    </div>
@endsection
