@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col ">
        <div class="w-full my-4">
            <a class="p-2 px-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100"
                href="{{ route('ballots', $election->id) }}">Create
                Ballot</a>
            <a class="p-2 px-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100"
                href="{{ route('voter.create') }}">Add Voters</a>
            <a class="p-2 px-5 bg-blue-600 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100"
                href="{{ route('ViewVoterIndex') }}">View Voters</a>
        </div>
        <div class="m-auto bg-white shadow-md rounded px-8 pt-6 pb-8 m-4">
            <ul>
                <li class="text-lg font-bold my-4">{{ $election->election_nm }}</li>
                <li class="my-2">
                    <span class="font-semibold">Start Date:
                    </span>{{ $election->start_date }}
                </li>
                <li class="my-2">
                    <span class="font-semibold">End Date:
                    </span>{{ $election->end_date }}
                </li>
                <li class="my-2">
                    <span class="font-semibold">Description:
                    </span>{{ $election->desc }}
                </li>
                <li class="my-2">
                    <span class="font-semibold">Election Status:
                    </span>{{ $election->status }}
                </li>
            </ul>
        </div>
        <div>
            <a class="
                    text-lg font-semibold text-red-500" href="{{ url()->previous() }}"
                type="submit">
                {{ '<<< Back' }}
            </a>
        </div>
    </div>
@endsection
