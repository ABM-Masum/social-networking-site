<div class="border border-gray-300 rounded-lg mt-3">
	@forelse($tweets as $tweet)
		<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-300' }}">
			<div class="mr-2 flex-shrink-0">
				<a href="{{ $tweet->user->path() }}">
					<img 
						src="{{$tweet->user->avatar}}" 
						alt="avatar"
						width="50"
						height="50" 
						class="rounded-full mr-2"
					>
				</a>
			</div>

			<div class="flex-1">
				<div class="flex justify-between">
					<h5 class="font-bold">
						<a href="{{ $tweet->user->path() }}">
							{{$tweet->user->name}}
						</a>
					</h5>

					<div class="flex">
						@can('update', $tweet)
							<a 
								href="/tweets/{{ $tweet->id }}/edit" 
								class="py-2 px-4 mr-2 rounded-full border border-gray-300 text-black text-xs hover:border-gray-500 shadow"
							>
								Edit
							</a>

							<form 
								action="/tweets/{{ $tweet->id }}/remove" 
								method="post">
								@csrf
								@method('DELETE')
								<button 
									class="py-2 px-4 mr-2 rounded-full border border-red-300 text-red-600 text-xs hover:text-white hover:bg-red-600 shadow" 
									type="submit"
								>
									Delete
								</button>
							</form>
						@endcan
					</div>
				</div>

				<p class="mb-4">
					{{ $tweet->created_at->diffForHumans() }}
				</p>

				<img 
					src="{{$tweet->file}}" 
					alt="" 
					class="mb-4 rounded"
				>

				<hr class="my-2">

				<p class="test-sm mb-3">
					{{$tweet->body}}
				</p>

				<hr class="my-2">

				@auth
					<x-like-buttons :tweet="$tweet" />
				@endauth
			</div>
		</div>

	@empty
		<p class="p-3">
			No tweets yet.
		</p>
	@endforelse

	{{ $tweets->links() }}
</div>