@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col">
        <div class="w-full my-4">
            <a class="p-2 pl-5 pr-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100"
                href="{{ route('AddElection') }}">Create Election</a>
        </div>
        <div class="w-full">
            <section class="text-gray-600 ">
                <div class="container px-5 py-24 mx-auto">
                    <div class="w-full mx-auto overflow-auto lg:w-2/3">
                        <table class="w-full text-left whitespace-no-wrap table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 title-font">
                                        Election Name</th>
                                    <th class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 title-font">
                                        Election Status</th>
                                    <th
                                        class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 title-font  text-center">
                                        Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($elections as $election)
                                    <tr class="items-center  border border-blue-100">
                                        <td class="px-4 py-2 text-black bg-gray-50">
                                            <a class="text-blue-600" href="{{ route('election.show', $election->id) }}">
                                                {{ $election->election_nm }}
                                            </a>
                                        </td>
                                        <td class="px-4 py-2 text-black bg-gray-50">
                                            <span>{{ $election->status }}</span>
                                        </td>
                                        <td class="px-4 py-2 bg-gray-50">
                                            <div class="flex">
                                                <a class="px-4 py-2 mx-auto text-base font-medium text-green-600 transition duration-500 ease-in-out transform bg-green-100 rounded-lg hover:bg-green-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"
                                                    href="{{ route('election.show', $election->id) }}">View</a>
                                                <a class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"
                                                    href="{{ route('election.edit', $election->id) }}">Edit</a>
                                                <form action="{{ route('election.destroy', $election->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button role="button"
                                                        class="px-4 py-2 mx-auto text-base font-medium text-red-600 transition duration-500 ease-in-out transform bg-red-100 rounded-lg hover:bg-red-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No elections created</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
