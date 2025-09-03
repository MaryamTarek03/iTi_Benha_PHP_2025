<!-- having dd here even when commented causes the page to be white and empty -->
<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Book Details</h1>
    <ul class="mt-4">
        <li class="py-2 border-b border-[#eee]">Book ID: {{ $book->id }}</li>
        <li class="py-2 border-b border-[#eee]">Title: {{ $book->title }}</li>
        <li class="py-2 border-b border-[#eee]">Author: {{ $book->author }}</li>
    </ul>
</x-layout>
<!-- @dd($book) -->