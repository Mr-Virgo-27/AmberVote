@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col max-w-xs">
        <div class="w-full my-4">
            <a class="bg-blue-600 shadow-md rounded py-1 px-2" href="{{ route('AddElection') }}">Create Election</a>
        </div>
        <div>
            <table>
                <tr>
                    <th>Election Name</th>
                </tr>
                @forelse ($elections as $election)
                    <tr>
                        <td>{{ $election->election_nm }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>No elections created</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
