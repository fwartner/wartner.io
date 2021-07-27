@section('page_title', 'About Me')

    <x-guest-layout>
        <div class="md:flex md:items-center bg-gray-700">
            <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
                    About Me
                </h2>
            </div>
        </div>

        <div class="bg-white overflow-hidden">
            <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
                <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                    <div>
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">👋, I am Florian!</h3>
                    </div>
                </div>
                <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                    <div class="relative lg:row-start-1 lg:col-start-2">
                        <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384"
                            fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20"
                                    patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                        </svg>
                        <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                            <figure>
                                <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                    <img class="rounded-lg shadow-lg object-cover object-center"
                                        src="{{ asset('photos/florian.jpg') }}"
                                        alt="Florian Wartner">
                                </div>
                                <figcaption class="mt-3 flex text-sm text-gray-500">
                                    <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2">Photograph taken in Travemünde</span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="mt-8 lg:mt-0">
                        {{-- <div class="text-base max-w-prose mx-auto lg:max-w-none">
                            <p class="text-lg text-gray-500">I´m florian and i ❤️ to create open source products. Most of the time I´m working with Laravel - The most popular PHP-Framework.

                                In the past I created projects like Laramap & PHPMap. Unfortunately some projects went offline due to the amount of time i needed to spend on both projects.</p>
                        </div> --}}
                        <div
                            class="mt-5 prose prose-gray text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                            <h3>Intro</h3>
                            <p>I´m florian and I ❤️ to create open source products. Most of the time I´m working with Laravel - The most popular PHP-Framework.</p>
                            <p>In the past I created projects like Laramap & PHPMap. Unfortunately some projects went offline due to the amount of time i needed to spend on both projects.</p>
                            <p><strong>Here are some facts about me:</strong></p>
                            <ul>
                                <li>👨‍💻 I'm a Solution Architect at <a href="https://nexus-united.com/">NEXUS United</a></li>
                                <li>🎙️ I'm hosting the <a href="https://load-podcast.com/">LOAD-Podcast</a></li>
                                <li>🌱 I'm currently learning Swift</li>
                                <li>👯 I'm looking to collaborate on Laravel Projects</li>
                                <li>🤔 I'm looking for help with AWS Lambda + EFS</li>
                                <li>💬 Ask me about infrastructure and laravel</li>
                            </ul>
                            <p>I am always interested in learning new things. Also I like to meet new people from all around the world. That's also why I'm so in love with open source. Because I think that open source enables you to work with interesting people from all over the world together on technology that you will love!</p>
                            <h3>My Story into development (The laravel way)</h3>
                            <p>I grown up in Lübeck, Germany. (Very close to the baltic sea 🌊)</p>
                            <p>I got into computers back when I was 13. After a couple of tries re-assambling my computer, I came across software-development. Back in that time it was Visual Basic but I figured out that C# is way faster in compiling so I moved to that one.</p>
                            <p>Around the time when I was 16 or so I was getting in touch with html and web-development. This was a game-changer for me since I could show my work to everyone in the world but at this time I wasn't really good at it ^^'.</p>

                            <p>So I was looking for something new. PHP was the shit! I've bought some books about PHP (Version 5.6) and started learning. I was looking for a framework that was built on top of the MVC pattern. I found codeigniter, crafted a few projects with this stuff for a few years but it turned out that I had to find something better.</p>
                            <p>Then I found Laravel and felt on love with it ❤️.</p>
                            <p>Since then I was mostly working with Laravel. It allows you to create almost everything that you could possibly imagine in just a few days, weeks or months.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
