@section('page_title', 'CV')

<x-guest-layout>
    <div class="md:flex md:items-center bg-gray-700">
        <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
                CV
            </h2>
        </div>
    </div>

    <div class="relative bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div class="sm:flex">
                <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                    <img class="object-cover shadow-lg rounded-lg" src="https://unavatar.io/github/fwartner"
                        alt="Florian Wartner">
                </div>

                <div>
                    <h4 class="text-lg font-bold">Florian Wartner</h4>
                    <p class="mt-1">
                        A Software-Engineer, Father, Hobby-Cook and Podcast-Host from Lübeck, Germany 🇩🇪
                    </p>

                    <div class="pt-5">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                General Information
                            </h3>
                        </div>
                        <div class="mt-5 border-t border-gray-200">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Full name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Florian Wartner
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Location
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Lübeck (Germany), Hamburg (Germany), Remote (Worldwide)
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Preferred Role
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Backend Developer (Lead, C-Level)
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        florian (at) wartner (dot) io
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Salary expectation
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        $95,000 - $120,000 (annual)
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Preferred Stack
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Laravel, TALL Stack, Vue.js, Redis, AWS, Docker, Kubernetes, Terraform, CI/CD
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Work Experience
                        </h3>

                        <ul class="divide-y divide-gray-200">
                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQFHqkrxBkuNYw/company-logo_100_100/0/1575961693586?e=1636588800&v=beta&t=Sr8RLcwNtACezIEEGUuCZ2ZjyLE2f86zzPa6jN3dX20"
                                        alt="NEXUS United (valantic)">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Solution Architect</h3>
                                            <p class="text-sm text-gray-500">2021</p>
                                        </div>
                                        <p class="text-sm text-gray-500">NEXUS United (valantic)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQGKeyzvdVeVRg/company-logo_100_100/0/1620314557841?e=1636588800&v=beta&t=o8W8jNj5ICsDSaN786ka2XRC-EHxse7oLGY1c1a4XDM"
                                        alt="MeinAlarm24">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Head Of Software-Development</h3>
                                            <p class="text-sm text-gray-500">2021</p>
                                        </div>
                                        <p class="text-sm text-gray-500">MeinAlarm24 GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQGCfM80Y2i5hA/company-logo_100_100/0/1573979769765?e=1636588800&v=beta&t=WbuNOSePZAHgIKK342QvkLC8cX7NAl8CaCrIWHuzY4s"
                                        alt="deineBAUSTOFFE">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Senior Lead Software Engineer</h3>
                                            <p class="text-sm text-gray-500">2020 - 2021</p>
                                        </div>
                                        <p class="text-sm text-gray-500">deineBAUSTOFFE GmbH & Co. KG</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQFKYNFANTDrgQ/company-logo_100_100/0/1540901076236?e=1636588800&v=beta&t=KWOFOTAtrK1MdSI0BiHeodi8ADYJmovcXZ8IDzF11O4"
                                        alt="alfatraining Bildungszentrum GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Senior Lead Backend Services Engineer</h3>
                                            <p class="text-sm text-gray-500">2018 - 2019</p>
                                        </div>
                                        <p class="text-sm text-gray-500">alfatraining Bildungszentrum GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQFXqwL5CGGVJw/company-logo_100_100/0/1623090943953?e=1636588800&v=beta&t=Jxm2-v1I7jT-jMlSgQcOfnV1p8Fi7ap0iU7Pe3vCGuY"
                                        alt="PARROT MEDIA GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Senior PHP Developer</h3>
                                            <p class="text-sm text-gray-500">2018</p>
                                        </div>
                                        <p class="text-sm text-gray-500">PARROT MEDIA GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQHhyX2YHtbNqw/company-logo_100_100/0/1557995840152?e=1636588800&v=beta&t=iqAWyME-DoK_3v2pt5SY3rJElVdC42SAv-ELZdUVwWQ"
                                        alt="ABOUT YOU GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Lead Fullstack Developer</h3>
                                            <p class="text-sm text-gray-500">2017 - 2018</p>
                                        </div>
                                        <p class="text-sm text-gray-500">ABOUT YOU GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQFxEr2HZbkDqg/company-logo_100_100/0/1576065262734?e=1636588800&v=beta&t=ERFzcwLnW_Tot8NIQqeCZTjKcHhk1c72cgekhcglMVw"
                                        alt="Anders Björk GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Backend Developer</h3>
                                            <p class="text-sm text-gray-500">2017</p>
                                        </div>
                                        <p class="text-sm text-gray-500">Anders Björk GmbH</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Stack Experience
                        </h3>

                        <ul class="divide-y divide-gray-200">
                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">PHP</h3>
                                            <p class="text-sm text-gray-500">10+ years</p>
                                        </div>
                                        <p class="text-sm text-gray-500">
                                        <div class="relative pt-1">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:90%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Laravel</h3>
                                            <p class="text-sm text-gray-500">7+ years</p>
                                        </div>
                                        <p class="text-sm text-gray-500">
                                        <div class="relative pt-1">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:85%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Vue.js</h3>
                                            <p class="text-sm text-gray-500">5+ years</p>
                                        </div>
                                        <p class="text-sm text-gray-500">
                                        <div class="relative pt-1">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:60%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">AWS</h3>
                                            <p class="text-sm text-gray-500">5+ years</p>
                                        </div>
                                        <p class="text-sm text-gray-500">
                                        <div class="relative pt-1">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:55%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Terraform</h3>
                                            <p class="text-sm text-gray-500">2+ years</p>
                                        </div>
                                        <p class="text-sm text-gray-500">
                                        <div class="relative pt-1">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:40%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Linux (Unix)</h3>
                                            <p class="text-sm text-gray-500">10+ years</p>
                                        </div>
                                        <p class="text-sm text-gray-500">
                                        <div class="relative pt-1">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:75%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Work Experience
                        </h3>

                        <ul class="divide-y divide-gray-200">
                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQFHqkrxBkuNYw/company-logo_100_100/0/1575961693586?e=1636588800&v=beta&t=Sr8RLcwNtACezIEEGUuCZ2ZjyLE2f86zzPa6jN3dX20"
                                        alt="NEXUS United (valantic)">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Solution Architect</h3>
                                            <p class="text-sm text-gray-500">2021</p>
                                        </div>
                                        <p class="text-sm text-gray-500">NEXUS United (valantic)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQGKeyzvdVeVRg/company-logo_100_100/0/1620314557841?e=1636588800&v=beta&t=o8W8jNj5ICsDSaN786ka2XRC-EHxse7oLGY1c1a4XDM"
                                        alt="MeinAlarm24">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Head Of Software-Development</h3>
                                            <p class="text-sm text-gray-500">2021</p>
                                        </div>
                                        <p class="text-sm text-gray-500">MeinAlarm24 GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQGCfM80Y2i5hA/company-logo_100_100/0/1573979769765?e=1636588800&v=beta&t=WbuNOSePZAHgIKK342QvkLC8cX7NAl8CaCrIWHuzY4s"
                                        alt="deineBAUSTOFFE">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Senior Lead Software Engineer</h3>
                                            <p class="text-sm text-gray-500">2020 - 2021</p>
                                        </div>
                                        <p class="text-sm text-gray-500">deineBAUSTOFFE GmbH & Co. KG</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQFKYNFANTDrgQ/company-logo_100_100/0/1540901076236?e=1636588800&v=beta&t=KWOFOTAtrK1MdSI0BiHeodi8ADYJmovcXZ8IDzF11O4"
                                        alt="alfatraining Bildungszentrum GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Senior Lead Backend Services Engineer</h3>
                                            <p class="text-sm text-gray-500">2018 - 2019</p>
                                        </div>
                                        <p class="text-sm text-gray-500">alfatraining Bildungszentrum GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQFXqwL5CGGVJw/company-logo_100_100/0/1623090943953?e=1636588800&v=beta&t=Jxm2-v1I7jT-jMlSgQcOfnV1p8Fi7ap0iU7Pe3vCGuY"
                                        alt="PARROT MEDIA GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Senior PHP Developer</h3>
                                            <p class="text-sm text-gray-500">2018</p>
                                        </div>
                                        <p class="text-sm text-gray-500">PARROT MEDIA GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C4D0BAQHhyX2YHtbNqw/company-logo_100_100/0/1557995840152?e=1636588800&v=beta&t=iqAWyME-DoK_3v2pt5SY3rJElVdC42SAv-ELZdUVwWQ"
                                        alt="ABOUT YOU GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Lead Fullstack Developer</h3>
                                            <p class="text-sm text-gray-500">2017 - 2018</p>
                                        </div>
                                        <p class="text-sm text-gray-500">ABOUT YOU GmbH</p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQFxEr2HZbkDqg/company-logo_100_100/0/1576065262734?e=1636588800&v=beta&t=ERFzcwLnW_Tot8NIQqeCZTjKcHhk1c72cgekhcglMVw"
                                        alt="Anders Björk GmbH">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">Backend Developer</h3>
                                            <p class="text-sm text-gray-500">2017</p>
                                        </div>
                                        <p class="text-sm text-gray-500">Anders Björk GmbH</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
