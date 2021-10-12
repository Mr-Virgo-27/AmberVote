@extends('layouts.app')

@section('content')
{{--    <div class="w-full flex flex-col max-w-xs">--}}
{{--        <div class="w-full my-4">--}}
{{--            <a class="bg-blue-600 shadow-md rounded py-1 px-2" href="{{ route('ballots', $election->id) }}">Create--}}
{{--                Ballot</a>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <ul>--}}
{{--                <li>{{ $election->election_nm }}</li>--}}
{{--                <li>{{ $election->start_date }}</li>--}}
{{--                <li>{{ $election->end_date }}</li>--}}
{{--                <li>{{ $election->desc }}</li>--}}
{{--                <li>{{ $election->status }}</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="bg-gray-200 w-full h-full flex flex-col max-w-x ">
{{--        <h1 class="mt-10 py-2 font-bold  flex justify-center items-center text-gray-800">Election Detail</h1>--}}
        <div class="mt-10 flex justify-center items-center">


                    <div class="rounded cursor-default p-5">
                    <table class="text-left p-5">
                      <thead class="bg-blue-600 ">
                      <tr>
                          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name:</th>
                          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Start date:</th>
                          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">End date:</th>
                          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Description:</th>
                          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status:</th>
                      </tr>
                      </thead>
                        <tbody class="bg-gray-400 ">
                        <tr>
                            <td class="py-4 px-6"> {{ $election->election_nm }}</td>
                            <td class="py-4 px-6">{{ $election->start_date }}</td>
                            <td class="py-4 px-6">{{ $election->end_date }}</td>
                            <td class="py-4 px-6">{{ $election->desc }}</td>
                            <td class="py-4 px-6">{{ $election->status }}</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>

        <div class="flex justify-center items-center">
            <a class=" p-2 pl-5 pr-5 bg-blue-600 text-gray-100 rounded-lg focus:border-4 border-blue-300 hover:bg-blue-400 hover:text-gray-100" href="{{ route('ballots', $election->id) }}">
                Create Ballot
            </a>
        </div>
    </div>



@endsection
