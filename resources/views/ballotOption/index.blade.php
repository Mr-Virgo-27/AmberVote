@extends('layouts.app')
@section('title')
    View Ballot
@endsection
@section('content')
    <h1 class="bg-gray-100 p-2 text-BLACK font-bold  text-center ">VIEW BALLOT</h1>
    <!-- component -->
    @if(session()->has('delete'))
        <div class="flex bg-green-400 text-center rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
            <div>
                <span class="font-medium">Alert</span> {{session('delete')}}
            </div>
        </div>
    @endif
    <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Question</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Options</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Max Response</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Min Response</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Photo</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Desc</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center  block md:table-cell">Action</th>
        </tr>
        </thead>
        <tbody class="block md:table-row-group">
        @foreach($data as $info)
            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">

                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$info->BallotQuestions->Question}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left  block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$info->option}}</td>
                <td class="p-2 md:border md:border-grey-500 text-center  block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$info->max_res}}</td>
                <td class="p-2 md:border md:border-grey-500 text-center  block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$info->min_res}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left  block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$info->photo}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left  block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$info->desc}}</td>
                <td class="p-2 md:border md:border-grey-500 text-center  block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold"></span>
                    <a href="{{url('/Edit/BallotOption/'.$info->id)}}"><button type="submit"  class="bg-green-600 hover:bg-green-400 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button></a>
                    <a href="{{url('/Delete/BallotOption/'.$info->id)}}"><button type="submit" class="bg-red-600 hover:bg-red-400 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button></a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
