@extends('layouts.app')

@section('content')
{{--    <div class="w-full flex flex-col max-w-xs">--}}
{{--        <div class="w-full my-4">--}}
{{--            <a class="bg-blue-600 shadow-md rounded py-1 px-2" href="{{ route('AddElection') }}">Create Election</a>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <table>--}}
{{--                <tr>--}}
{{--                    <th>Election Name</th>--}}
{{--                </tr>--}}
{{--                @forelse ($elections as $election)--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('election.show', $election->id) }}">--}}
{{--                                {{ $election->election_nm }}--}}
{{--                            </a>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @empty--}}
{{--                    <tr>--}}
{{--                        <td>No elections created</td>--}}
{{--                    </tr>--}}
{{--                @endforelse--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}



    <!-- component -->
    <div class="bg-gray-200 h-full  py-10 px-10 ">
        <div class="flex justify-center items-center pb-5">
            <a class="p-2 pl-5 pr-5 bg-blue-600 text-gray-100 rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100" href="{{ route('AddElection') }}">
                Create an election
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 md:gap-x-8 xl-grid-cols-4 gap-y-8 gap-x-4">
            <!-- Card 1 -->
            @forelse ($elections as $election)
            <div class=" p-2">
                <div class=" container mx-auto bg-white px-8 py-10 rounded-lg shadow-lg text-center">
                    <h2 class="text-xl text-center font-medium text-gray-700 mb-4">{{ $election->election_nm }}</h2>
                    <span class="text-gray-500 block ">Created: {{$election->created_at}}</span>
                    <a href="{{ route('election.show', $election->id)}}" class="mt-5 flex justify-center items-center px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-full"> See details... </a>
                </div>
            </div>
            @empty
                <p class="font-normal text-gray-700 mb-3">No election created.</p>
            @endforelse

        </div>
    </div>





@endsection
