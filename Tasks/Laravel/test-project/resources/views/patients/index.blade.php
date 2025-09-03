<x-layout>
    <h1 class="mb-1 text-[32px] font-medium">List of Patients</h1>
    <a href="{{ route('patients.create') }}" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-md">Add Patient</a>
    <ul class="mt-4">
        @foreach ($patients as $patient)
            <li class="py-2 border-b border-[#eee]"><a href="{{ route('patients.show', $patient['id']) }}">{{ $patient['name'] }}</a></li>
        @endforeach
    </ul>
</x-layout>