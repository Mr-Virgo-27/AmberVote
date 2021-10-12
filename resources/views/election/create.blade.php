@extends('layouts.app')

@section('content')
    <div class="bg-gray-200  flex justify-center items-center">
    <div class="w-full max-w-xs ">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-5" action="{{ route('Election.Store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="py-2 pl-16 font-bold text-gray-700">Create new election</label>
            </div>
            <div class="mb-4">
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="hidden" name="ballot_id">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="election_nm">
                    Election Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="election_nm">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="option">
                    Start Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" name="start">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="max_res">
                    End Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" name="end">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
                    Description
                </label>
                {{-- <input class="shadow-outlinehadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="desc"> --}}
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="desc"></textarea>
            </div>
            <div class="flex justify-center items-center">
                <button class=" p-2 pl-5 pr-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100" type="submit">
                    Submit
                </button>
            </div>
        </form>

    </div></div>
@endsection
