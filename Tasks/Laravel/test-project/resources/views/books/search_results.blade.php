<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Search Results</h1>

    @if($query)
    <p class="mb-4 text-gray-600">Search results for: "<strong>{{ $query }}</strong>"</p>
    @endif

    <a href="{{ route('books.search') }}" class="mb-4 inline-block px-4 py-2 bg-black text-white rounded-md">New Search</a>

    @if($books->count() > 0)
    <div class="mt-4">
        <h2 class="text-xl font-semibold mb-3">Found {{ $books->count() }} book(s):</h2>
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

    <div class="mt-6">
        <a href="{{ route('books.index') }}" class="px-4 py-2 bg-black text-white rounded-md">View All Books</a>
    </div>
</x-layout>