@if (count($posts))
	@foreach ($posts as $post)
		@include('posts.excerpt')
	@endforeach
@endif

@if ($posts instanceof \Illuminate\Pagination\Paginator)
	{{ $posts->links() }}
@endif