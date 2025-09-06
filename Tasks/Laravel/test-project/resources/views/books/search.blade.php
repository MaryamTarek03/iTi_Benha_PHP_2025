<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Search Books</h1>
    <form action="{{ route('books.find') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <x-input name="query" type="text" label="Title or Author" />
        </div>
        <button type="submit" class="px-4 py-2 bg-black text-white rounded-md">Search</button>
    </form>
</x-layout>