<div class="border border-blue-400 rounded-lg p-3 mb-3">
	<form 
		method="POST" 
		action="/tweets" 
		enctype="multipart/form-data"
	>
		@csrf
		<textarea
			name="body"
			id="body"
			class="w-full"
			placeholder="What's up?"
			style="outline: none;"
			required
		>
			
		</textarea>

		@error('body')
			<p class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</p>
		@enderror

		<div>
		    <label class="cursor-pointer text-blue-400 hover:text-blue-600">
		        <svg 
		        	class="h-5" 
		        	fill="currentColor" 
		        	viewBox="0 0 20 20"
		        >
		            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
		        </svg>
		        <input 
		        	type="file"
		        	id="file"
		        	name="file" 
		        	class="hidden"
		        />
		    </label>

		    @error('file')
		    	<p class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</p>
		    @enderror
		</div>

		<hr class="my-2">

		<footer class="flex justify-between">
			<img 
    			src="{{ current_user()->Avatar }}" 
    			alt="avatar"
    			width="30" 
    			class="rounded-full"
	    	>

			<x-button></x-button>
		</footer>
	</form>
</div>