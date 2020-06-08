<x-app>
	<header class="mb-6 relative">
		<div class="relative">
			<img 
			src="{{ $user->cover }}" 
			alt="cover photo" 
			class="rounded-lg mb-2 object-cover h-64 w-full" 
			>
			
			<img 
				src="{{ $user->avatar }}" 
				alt="avatar"
				class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
				style="left: 50%" 
				width="150" 
			>
		</div>

		<div class="flex justify-between items-center mb-8">
			<div style="max-width: 270px" >
				<h2 class="font-bold text-2xl mb-0">
					{{ $user->name }}
				</h2>
				<p>
					Joined {{ $user->created_at->diffForHumans() }}
				</p>
			</div>

			<div class="flex">
				{{-- @if(current_user()->is($user)) --}}
				@can('edit', $user)
					<a 
						href="{{ $user->path('edit') }}" 
						class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
					>
						Edit Profile
					</a>
				@endcan
				{{-- @endif --}}

				<x-follow-button :user="$user"></x-follow-button>
				
			</div>
		</div>

		<p class="text-sm text-center">
			{{ $user->description }}
		</p>
	</header>

		@include('_alerts')

		@include('_timeline', [
			'tweets' => $tweets
			])
</x-app>