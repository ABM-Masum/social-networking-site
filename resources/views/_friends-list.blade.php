<div  class="bg-gray-200 border border-gray-300 rounded-lg p-3">
	<h3 class="font-bold text-xl mb-4">Following</h3>

	<ul>
		@forelse(auth()->user()->follows as $user)
			<li class="{{$loop->last ? '' : 'mb-4'}}">
				<a 
					class="flex items-center text-sm" 
					href="{{ $user->path() }}">
					<img 
						src="{{ $user->avatar }}" 
						alt="avatar"
						width="40"
						height="40" 
						class="rounded-full mr-2"
					>	
						{{ $user->name }}
				</a>
			</li>
		@empty
			<li>
				No friends yet!
			</li>
		@endforelse
	</ul>
</div>
