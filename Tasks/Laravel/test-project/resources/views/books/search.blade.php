<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Search Books</h1>
    <form action="{{ route('books.find') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="query" class="block text-sm font-medium text-gray-700">Title or Author</label>
            <input type="text" name="query" id="query" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-black text-white rounded-md">Search</button>
    </form>
</x-layout>
