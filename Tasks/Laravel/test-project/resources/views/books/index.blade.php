{{--@dd($books)--}}
<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">List of Books</h1>
    <a href="{{ route('books.create') }}" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-md">Add
        Book</a>
    <a href="{{ route('books.search') }}" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-md">Search
        Books</a>
    <ul class="mt-4">
        @if($books->count() > 0)
        <div class="mt-4">
            <ul class="space-y-2">
                @foreach ($books as $book)
                <li class="py-3 px-4 border border-gray-300 rounded-lg">
                    <a href="{{ route('books.show', $book->id) }}">
                        <h3 class="font-semibold text-lg">{{ $book->title }}</h3>
                        <p class="text-gray-600">by {{ $book->author }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @else
        <p>No books found matching your search criteria.</p>
        @endif
    </ul>
</x-layout>