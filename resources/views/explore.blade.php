<x-app>
	<div>
		@foreach($users as $user)
			<a 
				class="flex items-center mb-4"
				href="{{ $user->path() }}"
			>
				<img 
					src="{{ $user->avatar }}" 
					alt="{{ $user->username }}'s avater"
					width="60"
					class="mr-4 rounded"
				>

				<h4 class="font-bold">{{ '@' . $user->name }}</h4>
			</a>
		@endforeach

		{{$users->links()}}
	</div>
</x-app>