<x-layout>
    <article style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
        <h1 style="color: #3490dc; font-size: 24px; margin-bottom: 10px;">
            <a href="/posts/{{$post->slug}}" style="text-decoration: none; color: #3490dc;">
                {!!$post->title !!} 
            </a>
        </h1>
        <p style="color: #666; font-size: 14px; margin-bottom: 5px;">
            By <a href="/authors/{{$post->author->id}}" style="text-decoration: none; color: #3490dc;">{{$post->author->name}}</a>
            in <a href="/categories/{{$post->category->slug}}" style="text-decoration: none; color: #3490dc;">{{$post->category->name }}</a>
        </p>
        
        @if(!empty($post->image_url) )    
        <br>
        <a href="{{ url('/storage/' . $post->image_url) }}"> <br><img height="25%" width="25%" src="{{ url('/storage/' . $post->image_url) }}" alt="Sorry, pictures fly away..." style="max-width: 100%; height: auto; margin-bottom: 10px;"><br></a>
    @endif
    
    </article>
    
    <a href="/" style="display: inline-block; margin-top: 10px; color: #3490dc; text-decoration: none; font-size: 16px;">Go Back</a>
</x-layout>