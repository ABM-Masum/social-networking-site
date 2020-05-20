{{-- another approch for form making--}}
{{-- @if(auth()->user()->following($user)) --}}
@auth
	@unless(current_user()->is($user)) {{--@if(auth()->user()->isNot($user))--}}
	<form 
		method="post" 
		action="{{ route('follow', $user->username) }}"
	>
	@csrf
	<button 
		type="submit" 
		class="bg-blue-400 rounded-full shadow py-2 px-4 text-white text-xs"
	>
		{{current_user()->following($user) ? 'Unfollow' : 'Follow'}}
	</button>
	</form>
	@endunless
@endauth