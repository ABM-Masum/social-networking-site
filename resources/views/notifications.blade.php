<x-app>
	<div class="bg-gray-200 mt-3">
	@forelse($notifications as $notification)
		<ul>
			<li class="p-4 hover:bg-blue-200 {{ $loop->last ? '' : 'border-b border-b-black' }}">	
				{{$notification->data['user']}} reacted to your tweet.	
			</li>
		</ul>
	@empty
		<div class="font-bold bg-white">
			Nobody liked your tweets.
		</div>
	@endforelse
	</div>
</x-app>