<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Add a Book</h1>
    <form action="{{ route('books.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <x-input name="title" type="text" />
            <x-input name="author" type="text" />
            <x-input name="year" type="number" />
        </div>
        <button type="submit" class="px-4 py-2 bg-black text-white rounded-md">Add Book</button>
    </form>
</x-layout>