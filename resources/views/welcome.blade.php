@section('page_title', 'Home')

<x-guest-layout>
    <x-site.head />

    <x-blog.post-list-small />

    <x-about.teaser-big />

    @livewire('newsletter.form-semi-bold')
</x-guest-layout>
