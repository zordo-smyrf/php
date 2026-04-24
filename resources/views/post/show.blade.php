<x-layout>
	@foreach ($postssss as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->slug }}
                {{ $post->likes }}
                {{ $post->created_at }}
                {{ $post->updated_at }}
			</div>
		</div>
	@endforeach
</x-layout>
