<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $chirp->message) }}</textarea>
            <div class="mt-4 space-x-2">
                <button class="my-2.5 bg-red-600 text-gray-200 block p-2">{{ __('Save') }}</button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
