<div class="bg-gray-200 rounded-lg p-3">
	<ul>
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="{{ route('home') }}"
			>
				Home
			</a>
		</li>
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="/explore"
			>
				Explore
			</a>
		</li>
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="/liked/notifications"
			>
				Notificatons
			</a>
		</li>
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="#"
			>
				Messages
			</a>
		</li>
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="#"
			>
				Bookmarks
			</a>
		</li>
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="#"
			>
				Lists
			</a>
		</li>
		@auth
		<li class="hover:text-blue-600">
			<a 
				class="font-bold text-lg mb-4 block" 
				href="{{ current_user()->path() }}"
			>
				Profile
			</a>
		</li>
		@endauth
	</ul>
</div>

<div class="bg-gray-600 rounded-lg p-3 mt-2 hover:bg-gray-700">
	<ul>
		@auth
		<li>
			<form method="POST" action="/logout">
				@csrf
				<button 
					class="font-bold text-lg text-white"
				>
					Logout
				</button>
			</form>
		</li>
		@endauth
	</ul>
</div>