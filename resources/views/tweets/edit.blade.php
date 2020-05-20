<x-app>

	<img 
		src="{{$tweet->file}}" 
		alt="" 
		class="mb-4 rounded"
	>

	<form 
		method="POST" 
		action="/tweets/{{ $tweet->id }}" 
		enctype="multipart/form-data"
	>
		@csrf
		@method('PATCH')

		<textarea
        	class="p-2 w-full h-40 border border-blue-400 rounded"
            name="body"
            id="body"
            required
        >{{$tweet->body}}</textarea>

		@error('body')
			<p class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</p>
		@enderror

		<div class="flex justify-between">
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

			<div class="mb-6">
				<x-button></x-button>
			</div>
			
		</div>
	</form>
</x-app>