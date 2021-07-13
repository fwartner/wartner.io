<div>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="px-6 py-6 bg-gray-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                <div class="xl:w-0 xl:flex-1">
                    <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                        Don't want to miss anything?
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg leading-6 text-gray-200">
                        Sign up for my newsletter and get the latest stuff that I publish.
                    </p>
                </div>
                <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                    @if ($subscibed)
                        <p>Welcome to the list! <3</p>
                    @else
                        <form class="sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input wire:model="email" id="email-address" name="email-address" type="email"
                                autocomplete="email" required
                                class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-700 focus:ring-white rounded-md"
                                placeholder="Enter your email">
                            <button type="submit"
                                class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent shadow text-base font-medium rounded-md text-white bg-gray-500 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                                Notify me
                            </button>
                        </form>
                        <p class="mt-3 text-sm text-gray-200">
                            I don't sell your email to anyone. I promise!
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
