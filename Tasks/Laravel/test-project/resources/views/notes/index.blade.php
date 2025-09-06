<x-layout>
    {{ session('info') }}
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Notes
        </h2>
        Hello, {{ session('user')->name }}!
    </header>
    <form class="flex gap-2 mb-6 mr-4" method="POST" action="">
        @csrf
        <x-input name="add" type="text" placeholder="What's in your mind?" label=" " />
        <x-button>Add Note</x-button>
    </form>
    <div class="notes mb-6 mr-4 ml-4">
        @if(session('notes') && count(session('notes')) > 0)
        <h3 class="text-lg font-bold mb-2">Your Notes:</h3>
        @foreach(session('notes') as $note)
        <p class="border-2 border-black p-6 rounded mb-2">{{ $note }}</p>
        @endforeach
        @else
        <p>No notes available.</p>
        @endif
    </div>
    <form action="{{ route('logout') }}" method="POST" class="ml-4 mr-4">
        @csrf
        <x-button>Log Out</x-button>
    </form>
</x-layout>