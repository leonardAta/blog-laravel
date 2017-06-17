 @extends('layout.master')
 @section('blogposts')

  @foreach($posts as $post)
  <div class="blog-post">
            <h2 class="blog-post-title"><a href="">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">{{ $post->author }}</a></p>

            <p>{{ $post->body }}</p>
            <hr>
            
          </div><!-- /.blog-post -->

  @endforeach

@stop