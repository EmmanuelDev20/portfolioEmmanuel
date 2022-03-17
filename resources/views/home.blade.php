<x-guest-layout>
    <div class="py-12">
        <section id="nav" class="max-w-7xl mx-auto w-11/12 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 mb-32">
            <div class="flex flex-col justify-center text-left pl-4">
                <h4 class="mb-2 font-bold text-redOne text-4xl text-left">Hello,</h4>
                <h1 class="mb-2 font-bold text-white text-5xl text-left">I'm Emmanuel.</h1>
                <p class="mb-4 font-semibold text-white text-2xl">A creative Laravel Developer</p>
                <a class="font-bold inline text-white text-xl px-2 py-1 border-2 border-redOne rounded-full w-max hover:bg-redOne hover:text-white"
                    href="#contact">Contact me</a>
            </div>
            <div class="sm:h-96 flex items-center justify-center">
                <img class="h-full w-48 sm:w-auto" src="{{ asset('assets/E-01.png') }}" alt="foto de lado">
            </div>
        </section>
        <a href="#nav">
            <img class="fixed bottom-2 right-2 w-12 hover:scale-110 transition-all" src="{{ asset('assets/up.png') }}"
                alt="">
        </a>
        <section id="about">
            <h3 class="font-bold text-4xl text-redOne text-center mb-4">About me</h3>
            <div class="max-w-7xl mx-auto w-11/12 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 pl-6 mb-16">
                <div class="sm:h-96 sm:flex items-center justify-center hidden">
                    <img class="h-full w-48 sm:w-auto" src="{{ asset('assets/2da imagen.png') }}" alt="">
                </div>
                <div class="flex flex-col justify-center">
                    <p class="mb-4 font-regular text-white text-md w-3/4">Self-driven full-stack web developer with 4+
                        years working with HTML,
                        CSS, PHP, Javascript, Laravel and Vue JS.
                        I have a background of Graphic design, so I can do beautiful things.
                        Aiming to help to develop nice products with a high performance.
                    </p>
                    <a class="text-white bg-redOne px-2 py-1 rounded-full flex items-center hover:scale-110 transition-all w-max"
                        href="{{ asset('assets/cv.pdf') }}" download="EmmanuelCV.pdf"><img class="h-4 mr-2"
                            src="{{ asset('assets/cv.png') }}" alt=""> Download CV
                    </a>
                </div>
            </div>

        </section>
        {{-- Projects --}}
        <section id="projects" class="w-full">
            <h3 class="font-bold text-4xl text-redOne text-center mb-52">Projects</h3>
            <div
                class="max-w-7xl w-11/12 mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center">
                {{-- Torre Alta --}}
                <div class="mb-40 card bg-white shadow-md rounded-xl w-8/12 flex items-center px-4 flex-col">
                    <a href="{{ route('projects-show', 'torrealta') }}">
                        <img class="-mt-32 drop-shadow-md hover:drop-shadow-2xl hover:scale-110 transition-all"
                            src="{{ asset('assets/torrealta.png') }}" alt="torre alta project">
                    </a>
                    <p class="font-semibold text-sm text-lightBlue mb-4">A project with more than twenty
                        CRUD systems.
                        Login, register, roles, permissions, reports into PDF’s, datatables with Livewire and other
                        interesting things.
                        For this project, I used Laravel, Alpine and Livewire.
                    </p>
                    <a class="w-full mt-auto py-1 mb-2 bg-redOne rounded-full text-center font-bold text-white hover:scale-110 transition-all"
                        href="{{ route('projects-show', 'torrealta') }}">See more</a>
                </div>
                {{-- Diseco --}}
                <div class="mb-40 card bg-white shadow-md rounded-xl w-8/12 flex items-center px-4 flex-col">
                    <a href="{{ route('projects-show', 'torrealta') }}">
                        <img class="-mt-32 drop-shadow-md hover:drop-shadow-2xl hover:scale-110 transition-all"
                            src="{{ asset('assets/diseco.png') }}" alt="torre alta project">
                    </a>
                    <p class="font-semibold text-sm text-lightBlue mb-4">A project for a real estate company.
                        I designed and the developed the project from scratch.
                        For this one, I used HTML, CSS and Vanilla Javascript.
                    </p>
                    <a class="w-full mt-auto py-1 mb-2 bg-redOne rounded-full text-center font-bold text-white hover:scale-110 transition-all"
                        href="{{ route('projects-show', 'torrealta') }}">See more</a>
                </div>
                {{-- Parroquia --}}
                <div class="mb-40 card bg-white shadow-md rounded-xl w-8/12 flex items-center px-4 flex-col">
                    <a href="{{ route('projects-show', 'torrealta') }}">
                        <img class="-mt-32 drop-shadow-md hover:drop-shadow-2xl hover:scale-110 transition-all"
                            src="{{ asset('assets/parroquia.png') }}" alt="torre alta project">
                    </a>
                    <p class="font-semibold text-sm text-lightBlue mb-4">A project for a real estate company.
                        I designed and the developed the project from scratch.
                        For this one, I used HTML, CSS and Vanilla Javascript.
                    </p>
                    <a class="w-full mt-auto py-1 mb-2 bg-redOne rounded-full text-center font-bold text-white hover:scale-110 self-end"
                        href="{{ route('projects-show', 'torrealta') }}">See more</a>
                </div>
            </div>

        </section>
        {{-- Skills --}}
        <section id="technologies" class="w-full mb-16">
            <h3 class="font-bold text-4xl text-redOne text-center mb-12">Technologies</h3>
            <div
                class="max-w-7xl w-11/12 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 justify-items-center mx-auto">
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/cib_laravel.png') }}" alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-44 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/akar-icons_html-fill.png') }}" alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-36 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/akar-icons_css-fill.png') }}" alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-40 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/akar-icons_javascript-fill.png') }}"
                            alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-24 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/cib_vue-js.png') }}" alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-32 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/cib_php.png') }}" alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-36 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/simple-icons_adobephotoshop.png') }}"
                            alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-52 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/simple-icons_adobeillustrator.png') }}"
                            alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-52 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="skills">
                        <img class="w-12 pb-3" src="{{ asset('assets/akar-icons_figma-fill.png') }}" alt="">
                        <div
                            class="relative rounded-full overflow-hidden w-56 h-2 bg-grayBar after:content-[''] after:w-36 after:h-2 after:bg-redOne  after:absolute">
                        </div>
                    </div>
                </article>
            </div>
        </section>
        {{-- Let's talk --}}

        <section id="contact">
            <h3 class="font-bold text-4xl text-redOne text-center mb-4">Let's talk</h3>
            <div class="max-w-7xl mx-auto w-11/12 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 mb-16">
                <div class="flex flex-col justify-center">
                    <form action="" class="sm:w-4/5 w-full">
                        <div>
                            <label class="text-white" for="name">Name:</label>
                            <div class="border-b-2 border-redOne w-full">
                                <input id="name"
                                    class="appearance-none bg-transparent border-none w-full focus:border-2 focus:border-redOne"
                                    type="text">
                            </div>
                        </div>
                        <div>
                            <label class="text-white" for="email">E-mail:</label>
                            <div class="border-b-2 border-redOne w-full">
                                <input id="email"
                                    class="appearance-none bg-transparent border-none w-full focus:border-2 focus:border-redOne"
                                    type="text">
                            </div>
                        </div>
                        <div class="mb-8 w-full">
                            <label class="text-white" for="msg">Your Message:</label>
                            <div class="border-b-2 border-redOne w-full">
                                <textarea class="bg-transparent border-none w-full" name="msg" id="msg"></textarea>
                            </div>
                        </div>
                        <input
                            class="bg-redOne px-2 py-1 rounded-full text-white hover:scale-110 transition-all cursor-pointer"
                            type="submit">

                    </form>
                </div>
                <div class="sm:h-96 sm:flex items-center justify-center hidden">
                    <img class="h-full w-48 sm:w-auto" src="{{ asset('assets/contact.png') }}" alt="">
                </div>
            </div>

        </section>
        <footer class=" flex flex-col items-center pl-4 md:flex-row justify-between max-w-5xl mx-auto mt-8">
            <div class="logo mb-2 order-5 md:order-1">
                <img src="{{ asset('assets/whiteLogo.png') }}" alt="">
            </div>
            <p class="text-white mb-2 order-6 md:order-2">Copyright ©2022 All rights reserved</p>
            <a class="order-4 mb-2 font-semibold text-white px-2 py-1 border-2 border-redOne rounded-full w-max hover:bg-redOne hover:text-white flex"
                href="https://api.whatsapp.com/send?phone=50687818208&text=Hello,%20I%20would%20like%20to%20contact%20with%20you!">
                <svg class="hover:fill-white fill-redOne mr-2" width="18" viewBox="0 0 28 28"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.5604 6.69C21.4804 0.4 13.1504 -1.47 6.69036 2.44C0.400358 6.35 -1.63964 14.85 2.44036 21.14L2.78036 21.65L1.42036 26.75L6.52036 25.39L7.03036 25.73C9.24036 26.92 11.6204 27.6 14.0004 27.6C16.5504 27.6 19.1004 26.92 21.3104 25.56C27.6004 21.48 29.4704 13.15 25.5604 6.69V6.69ZM21.9904 19.78C21.3104 20.8 20.4604 21.48 19.2704 21.65C18.5904 21.65 17.7404 21.99 14.3404 20.63C11.4504 19.27 9.07036 17.06 7.37036 14.51C6.35036 13.32 5.84036 11.79 5.67036 10.26C5.67036 8.9 6.18036 7.71 7.03036 6.86C7.37036 6.52 7.71036 6.35 8.05036 6.35H8.90036C9.24036 6.35 9.58036 6.35 9.75036 7.03C10.0904 7.88 10.9404 9.92 10.9404 10.09C11.1104 10.26 11.1104 10.6 10.9404 10.77C11.1104 11.11 10.9404 11.45 10.7704 11.62C10.6004 11.79 10.4304 12.13 10.2604 12.3C9.92036 12.47 9.75036 12.81 9.92036 13.15C10.6004 14.17 11.4504 15.19 12.3004 16.04C13.3204 16.89 14.3404 17.57 15.5304 18.08C15.8704 18.25 16.2104 18.25 16.3804 17.91C16.5504 17.57 17.4004 16.72 17.7404 16.38C18.0804 16.04 18.2504 16.04 18.5904 16.21L21.3104 17.57C21.6504 17.74 21.9904 17.91 22.1604 18.08C22.3304 18.59 22.3304 19.27 21.9904 19.78V19.78Z" />
                </svg>
                +506 87818208
                <a class="order-3 mb-2 text-white bg-redOne px-2 py-1 rounded-full flex items-center hover:scale-110 transition-all"
                    href="{{ asset('assets/cv.pdf') }}" download="EmmanuelCV.pdf"><img class="h-4 mr-2"
                        src="{{ asset('assets/cv.png') }}" alt=""> Download CV
                </a>
            </a>
        </footer>

    </div>
</x-guest-layout>
