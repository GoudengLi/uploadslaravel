<x-layout>

   <body>
      <form action="/search" method="get">
         <input type="text" name="query" placeholder="Search...">
         <button type="submit">Search</button>
      </form>
      <?php foreach ($posts as $post): ?>
      <?php
         $query = isset($_GET['query']) ? $_GET['query'] : '';
         $titleSimilarity = similar_text(mb_strtolower($query), mb_strtolower(substr($post->title, 0, 5)));
      ?>

      <?php if ($titleSimilarity >= 3): ?>
         <article style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
            <h1 style="color: #333; font-size: 24px;">
               <a href="/posts/{{$post->slug}}" style="text-decoration: none; color: #3490dc;">
                  {!!$post->title !!}   
                  @if(!empty($post->image_url))
                     <strong>has photo</strong>
                  @endif
               </a>
            </h1>
            <p style="color: #666; font-size: 14px;">
               By <a href="/authors/{{$post->author->id}}" style="text-decoration: none; color: #3490dc;">{{$post->author->name}}</a>
               in <a href="/?categories/{{$post->category->slug}}" style="text-decoration: none; color: #3490dc;">{{$post->category->name }}</a>
            </p>
            <div style="color: #333; font-size: 16px; line-height: 1.6;">
               <?= $post->body; ?><br>
               <strong><?= $post->excerpt; ?></strong>
            </div>
         </article>
      <?php endif; ?>
   <?php endforeach; ?>
     
      <?php foreach ($posts as $post): ?>
         <article style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
            <h1 style="color: #333; font-size: 24px;">
              <a href="/posts/{{$post->slug}}" style="text-decoration: none; color: #3490dc;">
                 {!!$post->title !!}   
                  @if(!empty($post->image_url))
              <strong>has photo</strong>
                  @endif
               </a>
            </h1>
            <p style="color: #666; font-size: 14px;">
               By <a href="/authors/{{$post->author->id}}" style="text-decoration: none; color: #3490dc;">{{$post->author->name}}</a>
               in <a href="/?categories/{{$post->category->slug}}" style="text-decoration: none; color: #3490dc;">{{$post->category->name }}</a>
            
            </p>
            <div style="color: #333; font-size: 16px; line-height: 1.6;">
               <?= $post->body; ?><br>
               <strong><?= $post->excerpt; ?></strong>
            </div>
         </article>
      <?php endforeach; ?>
   </body>


</x-layout>