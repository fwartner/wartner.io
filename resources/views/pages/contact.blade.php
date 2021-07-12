@section('page_title', 'Contact')

<x-guest-layout>
    <div class="md:flex md:items-center bg-gray-700">
        <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
                Contact
            </h2>
        </div>

    </div>

    @livewire('contact.form')
</x-guest-layout>
