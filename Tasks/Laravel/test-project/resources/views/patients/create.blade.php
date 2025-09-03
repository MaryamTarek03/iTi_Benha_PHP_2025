<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">Add a Patient</h1>
    <form action="{{ route('patients.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
            <input type="text" name="id" id="id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-black text-white rounded-md">Add Patient</button>
    </form>
</x-layout>