@if (session('alert_tweet'))
    <div 
    	class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" 
    >
	    <span>
			{{ session('alert_tweet') }}
		</span>

	    <span 
	    	class="absolute bottom-0 right-0 px-4 py-3"
	    	onclick="this.parentElement.style.display='none';"
	    >
		    <svg 
		    	class="fill-current h-6 w-6 text-green-500 ml-2" 
		    	role="button" 
		    >

		    <title>Close</title>

		    <path 
		    	d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
		    />
			</svg>     
      </span>
    </div>
@endif

@if (session('alert_follow'))
    <div 
    	class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" 
    >
	    <span>
			{{ session('alert_follow') }}
		</span>

	    <span 
	    	class="absolute bottom-0 right-0 px-4 py-3"
	    	onclick="this.parentElement.style.display='none';"
	    >
		    <svg 
		    	class="fill-current h-6 w-6 text-green-500 ml-2" 
		    	role="button" 
		    >

		    <title>Close</title>

		    <path 
		    	d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
		    />
			</svg>     
      </span>
    </div>
@endif

@if (session('alert_unfollow'))
    <div 
    	class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" 
    >
	    <span>
			{{ session('alert_unfollow') }}
		</span>

	    <span 
	    	class="absolute bottom-0 right-0 px-4 py-3"
	    	onclick="this.parentElement.style.display='none';"
	    >
		    <svg 
		    	class="fill-current h-6 w-6 text-red-500 ml-2" 
		    	role="button" 
		    >

		    <title>Close</title>

		    <path 
		    	d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
		    />
			</svg>     
      </span>
    </div>
@endif

@if (session('alert_tweet_update'))
    <div 
    	class="bg-orange-100 border border-orange-400 text-orange-700 px-4 py-3 rounded-lg relative" 
    >
	    <span>
			{{ session('alert_tweet_update') }}
		</span>

	    <span 
	    	class="absolute bottom-0 right-0 px-4 py-3"
	    	onclick="this.parentElement.style.display='none';"
	    >
		    <svg 
		    	class="fill-current h-6 w-6 text-orange-500 ml-2" 
		    	role="button" 
		    >

		    <title>Close</title>

		    <path 
		    	d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
		    />
			</svg>     
      </span>
    </div>
@endif
