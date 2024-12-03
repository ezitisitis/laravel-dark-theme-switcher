<label
    type="button"
    aria-label="{{ __("Toggle theme") }}"
    class="absolute group cursor-pointer top-4 right-4 p-2 border transition-all duration-200 bg-white border-gray-300 rounded-full shadow-lg hover:border-gray-400 dark:bg-gray-800 dark:border-gray-400 dark:hover:border-gray-200"
>
    @php
        $id =\Illuminate\Support\Str::uuid()->toString();
    @endphp
    <input id="{{$id}}" type="checkbox" name="theme-switch" class="theme-switch sr-only"/>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 stroke-gray-400 block group-hover:stroke-gray-600 transition-all duration-200 dark:hidden">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 hidden stroke-gray-400 fill-100 dark:group-hover:stroke-gray-200 transition-all duration-200 dark:block">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
    </svg>
</label>
