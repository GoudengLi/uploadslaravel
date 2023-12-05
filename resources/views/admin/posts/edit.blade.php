<x-layout>
    <section clss="px-6 py-8 max-w-md mx-auto">
      
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounder-xl"> 
             <h1 class="text-lg font-bold mb-4">
                Editing:{{ $post->title }}
        </h1>
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
      <x-form.input name="title" :value="old('title',$post->title)"/>
      <x-form.input name="slug" :value="old('slug',$post->slug)"/>
<div>
      <x-form.input name="image_url" type="file" :value="old('image_url',$post->image_url)"/>
        <a href="{{ url('/storage/' . $post->image_url) }}"> <img height="25%" width="25%" src="{{ url('/storage/' . $post->image_url) }}" 
        alt="Sorry, pictures fly away/do not have a picture"></a>
</div>
      <x-form.textarea name="excerpt">{{old('excerpt',$post->excerpt)}}</x-form.textarea>
      <x-form.textarea name="body">{{old('body',$post->body)}}</x-form.textarea>
     


      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
        for="category">
  Category

      </label>

      <select name="category_id" id="category_id">
        @php
            $categories= \App\Models\Category::all();
        @endphp
        @foreach ($categories as $category)
        <option value="{{$category->id}}" {{old('category_id',$post->category_id)==$category->id?'selected':''}}
            >{{ucwords($category->name)}}</option>    
        @endforeach
        
    </select>
      @error('category')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
      </div>
<x-submit-button>Publish</x-submit-button>

        </form>
        </main>
    </section>
</x-layout>
