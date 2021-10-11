@extends('layouts.app')

@section('content')

<div class="bg-blue-900 py-6">
  <h1 class="text-lg font-semibold text-gray-100 no-underline text-center">{{ $elec[0]['user']['org_nm'] }} {{ $elec[0]['user']['org_type'] }}</h1>
</div>

          <div class="container items-center px-5 py-12 lg:px-20">
            <div class="flex flex-wrap ">
              <div class="w-full mx-auto my-4 bg-white border rounded-lg shadow-xl  lg:w-1/2">
                <form action="" method="POST">
                <div class="p-6">
                  <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font text-center"> {{ $election }}</h2>
                  @foreach ($ballot_question as $ballot)

                  <h4 class="mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font text-center "> {{ $ballot['question'] }}</h4>

                  <input type="hidden" name="ballot_question_id" value={{ $ballot['id'] }}>

                  @foreach ($ballot['ques_opt'] as $options)
                  
                  <input type="radio" name="answer" class="mb-3 text-base leading-relaxed text-blueGray-500 center">{{ $options['option']}} </input>
                  <label for="answer">{{ $options['photo'] }}</label>
                  <br>
                  @endforeach

                  @endforeach
                  
                  <p></p>
                  <div class="flex flex-wrap justify-between">
                    <button  type="submit" class="w-full px-16 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform border-black rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 bg-blue-600 hover:bg-blue-400"> Vote </button>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        

@endsection