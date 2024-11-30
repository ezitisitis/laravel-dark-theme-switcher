<label
    type="button"
    aria-label="{{ __("Toggle theme") }}"
    class="absolute top-4 right-4"
>
    @php
        $id =\Illuminate\Support\Str::uuid()->toString();
    @endphp
    <input id="{{$id}}" type="checkbox" name="theme-switch" class="theme-switch sr-only" />
    <span class="block dark:hidden">switch to dark</span>
    <span class="hidden dark:block">switch to light</span>
</label>
