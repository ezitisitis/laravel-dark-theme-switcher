<script>
    if (localStorage.getItem('{{config('dark-theme-switcher.local_storage_key')}}') === 'true'
        || (!('{{config('dark-theme-switcher.local_storage_key')}}') in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.querySelector('html').classList.add('{{config('dark-theme-switcher.class')}}');
    } else {
        document.querySelector('html').classList.remove('{{config('dark-theme-switcher.class')}}');
    }
</script>
