<x-app-layout>

    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="px-2 mx-3">
                        <a href="{{ route('notebooks.show', ['notebook' => $note->notebook_id]) }}">
                         <svg class="inline w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                          </svg>
                          {{ __("Back to notebook") }}
                        </a>
                    </div>
                    <div class="flex flex-col lg:flex-row">
                        <div class="lg:basis-3/4 bg-sky-100 mx-3 my-2 px-2 py-3 min-h-[50px] rounded-lg">
                            <div class="flex flex-nowrap items-center border-b-4 border-blue-200">
                                <div class="text-3xl font-bold">{{ $note->title }}</div>
                                <div class="flex-grow">&nbsp;</div>
                                <a href="{{ route('notes.edit', ['note' => $note]) }}" class="">
                                    <svg class="fill-blue-500" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="1.5rem" height="1.5rem" viewBox="0 0 24 24">

                                        <path
                                            d="M 18 2 L 15.585938 4.4140625 L 19.585938 8.4140625 L 22 6 L 18 2 z M 14.076172 5.9238281 L 3 17 L 3 21 L 7 21 L 18.076172 9.9238281 L 14.076172 5.9238281 z">
                                        </path>

                                    </svg>
                                </a>
                            </div>
                            <div class="text-sm text-gray-500 text-right rtl:text-left">{{ $note->created_at }}</div>
                            <div>{{ $note->contents }}</div>
                        </div>
                        <div class="mx-3 lg:basis-1/4">
                            <div class="text-sm text-gray-500">tags:</div>
                            <div class="flex flex-wrap flex-row gap-1">
                                <a href="#" class="rounded-lg bg-yellow-500 px-2 py-2">work</a>
                                <a href="#" class="rounded-lg bg-gradient-to-r from-red-500 to-red-600 px-2 py-2">web
                                    design</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>