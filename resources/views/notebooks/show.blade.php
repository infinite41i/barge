<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $notebook->name }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row flex-wrap gap-3">
                        @forelse ($notebook->notes as $note)
                            <div class="border-2 border-gray-500 rounded-lg p-2">
                                <a href="{{ route('notes.show', ['note' => $note->id]) }}">
                                    <h3>
                                        {{ $note->title }}
                                    </h3>
                                    <p class="text-sm">
                                        {{ substr($note->contents, 0, 55) }}
                                    </p>
                                </a>
                            </div>
                        @empty
                            <p>No notes!</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>