@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col max-w-xs">
        <div class="w-full my-4">
            <a class="bg-blue-600 shadow-md rounded py-1 px-2" href="{{ route('ballots', $election->id) }}">Create
                Ballot</a>
        </div>
        <div>
            <ul>
                <li>{{ $election->election_nm }}</li>
                <li>{{ $election->start_date }}</li>
                <li>{{ $election->end_date }}</li>
                <li>{{ $election->desc }}</li>
                <li>{{ $election->status }}</li>
            </ul>
        </div>
    </div>
@endsection
