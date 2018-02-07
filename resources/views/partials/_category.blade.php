@if($post->hasCategory())
    <h6><a href="{{route('category.show', $post->category->slug)}}"> {{$post->getCategoryTitle()}}</a></h6>
@else
    <h6><a href="#">Without Category</a></h6>
@endif