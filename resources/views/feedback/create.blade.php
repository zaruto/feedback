@extends('layouts.app')

@section('content')
   
<form action="{{route('feedback.store')}}" 
      method="POST" 
      class="form bg-white p-6 my-10 relative" 
      autocomplete="off">

              @csrf
                <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px">
                    <i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45">
                    </i>
                  </div>
                <h3 class="text-2xl text-gray-900 font-semibold">Your feedback help us to improve!</h3>
                
                <p class="text-gray-600 mb-5">Please fill the form</p>
                
                @if($errors->any())
                <div class="block text-sm text-left text-red-600 bg-red-200 border border-red-400 h-12 flex items-center p-4 rounded-sm" 
                     role="alert">
                  {{$errors->first()}}
                </div>  
                @endif

                <div class="flex space-x-5 mt-3">
     
                  <input type="text" 
                           name="name" 
                           id="" 
                           placeholder="Full Name" 
                           class="border p-2  w-1/2"
                           value="{{ Request::old('name') }}"
                           >

                    <input type="tel" 
                           name="mobile" 
                           id="" 
                           placeholder="Mobile Number" 
                           class="border p-2 w-1/2"
                           value="{{ Request::old('mobile') }}"
                           >
                </div>
  
                <textarea 
                        name="feedback" 
                        id="" 
                        cols="10" 
                        rows="3" 
                        placeholder="Your feedback.." 
                        class="border p-2 mt-3 w-full">
                </textarea>
         
                <input type="submit" 
                       class="w-full 
                       rounded-lg mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">
</form>


<form action="">


  <div>



  </div>



</form>
@endsection