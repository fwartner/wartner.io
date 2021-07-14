@section('page_title', $post->title)

    @push('styles')
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.6.0/styles/atom-one-dark.min.css">
    @endpush

    @push('scripts')
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.6.0/highlight.min.js"></script>
        <script type="text/javascript">
            hljs.highlightAll();

            function copyToClipboard(text) {
                if (window.clipboardData && window.clipboardData.setData) {
                    return window.clipboardData.setData("Text", text);

                } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
                    var textarea = document.createElement("textarea");
                    textarea.textContent = text;
                    textarea.style.position = "fixed";
                    document.body.appendChild(textarea);
                    textarea.select();
                    try {
                        return document.execCommand("copy");
                    } catch (ex) {
                        console.warn("Copy to clipboard failed.", ex);
                        return false;
                    } finally {
                        document.body.removeChild(textarea);
                    }
                }
            }
        </script>
    @endpush
    <x-guest-layout>
        <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-blog.single-post :post="$post" />

            <x-blog.share-buttons :post="$post" />
            @livewire('newsletter.form-semi-bold')
        </div>
    </x-guest-layout>
