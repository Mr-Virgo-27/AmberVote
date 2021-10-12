@extends('layouts.app')

@section('content')

<!-- component -->
<div class="bg-gray-200">


    {{-- <section class="text-blueGray-700 "> --}}
        <div class="container flex flex-col items-center px-5 py-8 mx-auto">
            <div class="flex flex-col w-full mb-12 text-left ">
                <div class="w-full mx-auto lg:w-1/2">
                    <h2 class="mx-auto mb-6 text-xl font-semibold leading-none tracking-tighter text-black title-font">Election Messages </h2>
                    <form action="{{ route('ballotmsgs.store') }} method=" POST">
                        <input type="hidden" name="election_id" value="">
                        <div class="w-full mx-auto my-4 bg-white border rounded-lg shadow-xl ">
                            <div class="p-6">
                                <input type="checkbox" name="msg_type" id="" value="<p>You have logged in successfully </p>" checked>
                                <label for='msg_type'>Log in Messages</label>
                                <p class="mb-3 text-base leading-relaxed text-blueGray-500">You have logged in successfully</p>
                            </div>
                        </div>

                        <div class="w-full mx-auto my-4 bg-white border rounded-lg shadow-xl ">
                            <div class="p-6">

                        <input type="checkbox" name="msg_type" id="" value="<p>Thank you for Voting in this Election </p>">
                        <label for='msg_type'>Thank you</label>
                        <p class="mb-3 text-base leading-relaxed text-blueGray-500">Thank you for Voting in this Election</p>

                           </div>
                        </div>
                        <div class="w-full mx-auto my-4 bg-white border rounded-lg shadow-xl ">
                            <div class="p-6">

                        <input type="checkbox" name="msg_type" id="" value="<p>Voting for this election has closed! Please contact your election administrator if you have questions</p>">
                        <label class="mb-3 text-base leading-relaxed text-blueGray-500" for='msg_type'>After Election</label>
                        <p class="mb-3 text-base leading-relaxed text-blueGray-500">Voting for this election has closed! Please contact your election administrator if you have questions</p>
                           </div>
                        </div>
                        <input class="py-2 px-4 mt-8 bg-blue-600 hover:bg-blue-400 text-white rounded-md shadow-xl" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
  

</div>

@endsection
