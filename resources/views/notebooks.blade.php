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
                <div class="p-6 bg-white border-b border-gray-200">
                    notebooks are here.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>