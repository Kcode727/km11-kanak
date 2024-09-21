@if (csrf_token())
<form action="{{ route('language.switch') }}" method="POST" class="inline-block py-0 mr-0">
    @csrf
    <select
        name="lang" id="lang"
        onchange="this.form.submit()"
        class="px-1 py-1 w-14 rounded bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100">
        
        @foreach(config('app.languages') as $language)
            <option 
                value="{{ $language }}" 
                class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100"
                {{ app()->getLocale() === $language ? 'selected' : '' }}>
                {{ strtoupper($language) }}
            </option>
        @endforeach
    </select>
</form>
@endif
