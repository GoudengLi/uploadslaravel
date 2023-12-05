<x-layout>

    <section class="px-6 py-8" id="6">
      <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounder-xl">
        <h1 class="text-center font-bold text-xl" >Log In!</h1>
     
      <form method="POST" action="/login" class="mt-10">
        @csrf
 
       <div>
         <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
         for="email">
       Email
 
       </label>
 
       <input class="border border-grey-400 p-2 w-full"
       type="email"
       name="email"
       id="email"
       value="{{old('email')}}"
       required>
 
       @error('email')
       <p class="text-red-500 text-xs mt-1">{{$message}}</p>
   @enderror
 </div>
 <div>
       <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
       for="password">
     password
 
     </label>
 
     <input class="border border-grey-400 p-2 w-full"
     type="text"
     name="password"
     id="password"
     required> 
     @error('password')
     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
 @enderror
   </div>
     <div class="mb-6">
     <button type="submit"
     class="bg-blue-400 text-white rounder py-2 px-4 hover:bg-blue-500  mt-5"
     >
  Log In
   </button>  
    </div>
 
       
           </div>   
           @if ($errors-> any)
           <ul>
          
           @foreach ( $errors->all() as $error )
               <li class="text-red-500 text-xs">{{$error}}</li>
           @endforeach
         </ul> 
         @endif
         </form>
        </main>
    </section> 
</x-layout>