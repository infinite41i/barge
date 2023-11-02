<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notebooks') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <details>
                        <summary class="list-none cursor-pointer" role="button">
                            <span class="bg-green-300 rounded-lg p-2 hover:shadow-md transition-all">
                                {{ __('New Notebook') }} &plus;
                            </span>
                        </summary>
                        <form action="{{ route('notebooks.store') }}" method="POST" id="newNotebookButton" class="mt-6">
                            @csrf
                            <label>
                                {{ __('notebook name') }}:
                                <input type="text" name="notebook_name">
                            </label>
                            <input type="submit" value="{{ __('create') }}" class="bg-green-300 rounded-lg p-2 hover:shadow-md transition-all cursor-pointer">
                        </form>
                    </details>
                    
                    
                </div>
                {{-- Notebooks section --}}
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="flex flex-col space-y-3">
                        @forelse ($notebooks as $notebook)
                            <li class="border-b border-sky-300 last:border-none pb-2 last:pb-0">
                                <a href="#" class="rtl:float-right ltr:float-left flex items-center hover:text-stone-500">
                                    <span class="ltr:pr-2 rtl:pl-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                            <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                            <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                                        </svg>
                                    </span>
                                    <span>{{ $notebook->name }}</span>
                                </a>
                                <a href="#" class="rtl:float-left ltr:float-right bg-amber-400 rounded-lg p-1">
                                    {{ __("Manage Notebook") }}
                                </a>
                            </li>
                        @empty
                            <p>{{ __("No notebooks found. create one!") }}</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>