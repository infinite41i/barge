<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editing note') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row flex-wrap gap-3">
                        <form class="flex flex-col gap-3"
                        action="{{ route('notes.update', ['note' => $note]) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <input type="text" name="title" id="title" placeholder="{{ __('Title') }}" value="{{ $note->title }}">
                            <textarea name="contents" id="contents" cols="30" rows="10" placeholder="{{ __('Take a note now...') }}">{{ $note->contents }}</textarea>
                            <button type="button" id="discard_note" onclick="location.href='{{ route('notes.show', ['note' => $note]) }}'" class="rounded-md bg-red-400 text-white px-3 py-2">
                                {{ __('Discard') }}
                            </button>
                            <button type="submit" id="save_note" type="submit" class="rounded-md bg-blue-500 text-white px-3 py-2">
                                {{ __('Save') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>