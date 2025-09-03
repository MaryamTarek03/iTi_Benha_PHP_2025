<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Add a Book</h1>
    <form action="{{ route('books.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>

            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" id="author" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>

            <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
            <input type="number" name="year" id="year" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-black text-white rounded-md">Add Book</button>
    </form>
</x-layout>
