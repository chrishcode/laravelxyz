<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased bg-white">
        <header class="text-gray-700 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                </nav>
                <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">laravelxyz</span> -->
                <svg width="126px" height="31px" viewBox="0 0 126 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <title>o copy</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="o-copy" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(3.000000, 2.000000)">
                            <rect id="Rectangle" fill="#667EEA" x="3" y="4" width="19" height="19" rx="6"></rect>
                            <image id="icons8-qr_code" x="4" y="5" width="17" height="17" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAYKADAAQAAAABAAAAYAAAAACpM19OAAADXUlEQVR4Ae2dvW7UQBDHc4gWkFJDiVKm5SnhPfh6AmpqWkRLC1KOBzhmFF0UTZyd253ZsXP6WVrlxt752N/f66zvEt/FBRsEIAABCEAAAhCAAAQgAAEIQAACEIAABBoEDofDG2mfpe2lRTeN8VXaVSPl3SEv2V3HxguJsVr9tqyd3eHZWrz0+SHt0uvbefyv9L/e7Xa/W34qQOu4+DfHtHb9tvZndscJ9gfpkw1f02rM9/pi8rap+ptnyxIIOYP2sv/F0rGEfXs5gV+14iTMgFXrt2MbEaB5CbAJeu0TLiHN/FH/3nptfy+/7T9yCbIxsAMEECAAL8MVATIoBmI8D/guunrXQO+X6GLQezu9+Pe6Dr304kfrt0UxAyyRYhsBioHbdAhgiRTbCFAM3KZDAEuk2EaAYuA2HQJYIsV2+n1A9jrZ8vDie+t4G8/aXnzbP2ozA6IEg/4IEAQYdUeAKMGg/4gA/4I5W+43rYNJxzZV/4gA35JALIWZGfuYb2aOmbFv65dVwpW0P7paSN405tsjpcd+ejkf8zvuF/9V6z/WEfopg3gt7aO0G2nRTWPon7i48LVoL9kpA5MYq9V/Sn30gQAEIAABCEAAAhCAAATOm0D634Z678frjVQL6bn727GPvBdkY2AHCCBAAF6GKwJkUAzEQIAAvAxXBMigGIiBAAF4Ga4IkEExEKP7PiCQq8R17fuM3kEyA3qJJfdHgGSgveEQoJdYcn8ESAbaGw4Beokl90eAZKC94RCgl9gW+stae7Xn7eg6v7V5fFq+emy2v43ffSMmNT715wU1Ic/+QMgKMHIJ2tTzduyAnpo9MgNWfd6Od5mYfQZH89sTZGQGzHpYk9b20hZ47vaIAOfOpHR8CFCK+2EyBHjIpHRP+v8JR38JeqOPxp/t79VvjzMDLJFiGwGKgdt0CGCJFNsIUAzcpkMAS6TYRoBi4DYdAlgixXb6fYD3ZlV0fF782ev8aH47fmaAJVJsI0AxcJsOASyRYntEgE09b6eYV3q6EQFmPhNnZux0eBkBRz6S1G87+i5Nv/Mlc9Mv8Xknq5hfraDRVcja/nZs3TNAAP2UINfSPknTz4ejm8b4Is2FH02EPwQgAAEIQAACEIAABCAAAQhAAAIQgAAE1iTwH9Oq46PrVIwqAAAAAElFTkSuQmCC"></image>
                            <text id="laravelxyz" font-family="Nunito-Bold, Nunito" font-size="20" font-weight="bold">
                                <tspan x="27" y="20" fill="#1A202C">laravel</tspan>
                                <tspan x="89.734375" y="20" font-family="Nunito-Light, Nunito" font-weight="300" fill="#667EEA">xyz</tspan>
                            </text>
                        </g>
                    </g>
                </svg>
                </a>
                <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                </div>
            </div>
        </header>

        <section class="text-gray-700 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://file.coffee/u/5s3AXWoV7Z.png">
                <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">We are a Swedish coding studio</h1>
                <p class="mb-8 leading-relaxed">We build websites and web apps with Laravel and Statamic, two of the most powerful coding tools in the world.</p>
                <div class="flex justify-center">
                    <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><i class="fa fa-arrow-down mr-4 mt-1"></i>Scroll to see how we can help you<i class="fa fa-arrow-down ml-4 mt-1"></i></button>
                    <!-- <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Button</button> -->
                </div>
                </div>
            </div>
        </section>

        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">What we do
                <br class="hidden sm:block">
                </h1>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    </div>
                    <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">We build websites and web apps</h2>
                    <p class="leading-relaxed text-base">We build websites and web apps with Laravel and Statamic, two of the most powerful coding tools in the world.</p>
                    <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                    </div>
                </div>
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                    </div>
                    <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">We get them online</h2>
                    <p class="leading-relaxed text-base">After a website or web app is finished we get it online for the world to see.</p>
                    <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                    </div>
                </div>
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    </div>
                    <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">We maintain them</h2>
                    <p class="leading-relaxed text-base">When a website or web app is online we make sure to maintain it so that everything runs smoothly.</p>
                    <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="flex flex-wrap w-full">
                <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                    <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-4">
                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
                        <p class="leading-relaxed">We start by having a meeting to brainstorm how we can make an idea a reality.</p>
                    </div>
                    </div>
                    <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-4">
                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
                        <p class="leading-relaxed">Next we get to work and build the website or web app.</p>
                    </div>
                    </div>
                    <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"></circle>
                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-4">
                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
                        <p class="leading-relaxed">Now when the website or web app is finished we get it online.</p>
                    </div>
                    </div>
                    <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-4">
                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
                        <p class="leading-relaxed">After the website or web app is online we maintain and run it.</p>
                    </div>
                    </div>
                    <div class="flex relative">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-4">
                        <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
                        <p class="leading-relaxed">Now we are finished! Our idea has been implemented and is now a reality.</p>
                    </div>
                    </div>
                </div>
                <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="https://file.coffee/u/T_TYFv6jQU.png" alt="step">
                </div>
            </div>
        </section>

        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Things we have built
                <br class="hidden sm:block">
                </h1>
                <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                <div class="sm:w-1/2 mb-10 px-4">
                    <!-- <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://file.coffee/u/OF2gWfrP8e.png">
                    </div> -->
                    <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Adonis Casts</h2>
                    <p class="leading-relaxed text-base">A video streaming platform.</p>
                    <form action="https://adoniscasts.com/"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded-lg">Visit project</button></form>
                </div>
                <div class="sm:w-1/2 mb-10 px-4">
                    <!-- <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1202x502">
                    </div> -->
                    <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Adonis Cloud</h2>
                    <p class="leading-relaxed text-base">A cloud hosting platform.</p>
                    <form action="https://adoniscloud.live/"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded-lg">Visit project</button></form>
                </div>
                </div>
            </div>
        </section>

        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-col">
                <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://file.coffee/u/xYq8xrY9R2.png">
                </div>
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                    <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                        <img src="https://adoniscasts.com/storage/profiles/9GymScUsSSY2TVPi3MyGIuTVisoT6BPjfM5VEZ16.jpeg" class="object-cover object-center h-full w-full rounded-full" />
                    </div>
                    <div class="flex flex-col items-center text-center justify-center">
                        <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Christopher Wohlfarth</h2>
                        <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                        <p class="text-base text-gray-600">Christopher has a higher education diploma in computer science from Halmstad University.</p>
                    </div>
                    </div>
                    <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                    <p class="leading-relaxed text-lg mb-4">Hello! My name is Christopher. I'm passionate about making ideas a reality by coding amazing websites and web apps, that's why I founded Laravel XYZ. Let's built some awesome stuff together!</p>
                    <!-- <a class="text-indigo-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="text-gray-700 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Our pricing is very simple.</p>
                </div>
                <div class="flex flex-wrap -m-4 justify-center">
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PAY PER HOUR</h2>
                    <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">$30</h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>We build a website or web app
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>We get it online
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>We maintain and run it
                    </p>
                    <!-- <form action="/register">
                    <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    </form> -->
                    <p class="text-xs text-gray-500 mt-3">Good for you who want to make your idea a reality.</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <footer class="text-gray-700 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg width="126px" height="31px" viewBox="0 0 126 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                        <title>o copy</title>
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="o-copy" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(3.000000, 2.000000)">
                                <rect id="Rectangle" fill="#667EEA" x="3" y="4" width="19" height="19" rx="6"></rect>
                                <image id="icons8-qr_code" x="4" y="5" width="17" height="17" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAYKADAAQAAAABAAAAYAAAAACpM19OAAADXUlEQVR4Ae2dvW7UQBDHc4gWkFJDiVKm5SnhPfh6AmpqWkRLC1KOBzhmFF0UTZyd253ZsXP6WVrlxt752N/f66zvEt/FBRsEIAABCEAAAhCAAAQgAAEIQAACEIAABBoEDofDG2mfpe2lRTeN8VXaVSPl3SEv2V3HxguJsVr9tqyd3eHZWrz0+SHt0uvbefyv9L/e7Xa/W34qQOu4+DfHtHb9tvZndscJ9gfpkw1f02rM9/pi8rap+ptnyxIIOYP2sv/F0rGEfXs5gV+14iTMgFXrt2MbEaB5CbAJeu0TLiHN/FH/3nptfy+/7T9yCbIxsAMEECAAL8MVATIoBmI8D/guunrXQO+X6GLQezu9+Pe6Dr304kfrt0UxAyyRYhsBioHbdAhgiRTbCFAM3KZDAEuk2EaAYuA2HQJYIsV2+n1A9jrZ8vDie+t4G8/aXnzbP2ozA6IEg/4IEAQYdUeAKMGg/4gA/4I5W+43rYNJxzZV/4gA35JALIWZGfuYb2aOmbFv65dVwpW0P7paSN405tsjpcd+ejkf8zvuF/9V6z/WEfopg3gt7aO0G2nRTWPon7i48LVoL9kpA5MYq9V/Sn30gQAEIAABCEAAAhCAAATOm0D634Z678frjVQL6bn727GPvBdkY2AHCCBAAF6GKwJkUAzEQIAAvAxXBMigGIiBAAF4Ga4IkEExEKP7PiCQq8R17fuM3kEyA3qJJfdHgGSgveEQoJdYcn8ESAbaGw4Beokl90eAZKC94RCgl9gW+stae7Xn7eg6v7V5fFq+emy2v43ffSMmNT715wU1Ic/+QMgKMHIJ2tTzduyAnpo9MgNWfd6Od5mYfQZH89sTZGQGzHpYk9b20hZ47vaIAOfOpHR8CFCK+2EyBHjIpHRP+v8JR38JeqOPxp/t79VvjzMDLJFiGwGKgdt0CGCJFNsIUAzcpkMAS6TYRoBi4DYdAlgixXb6fYD3ZlV0fF782ev8aH47fmaAJVJsI0AxcJsOASyRYntEgE09b6eYV3q6EQFmPhNnZux0eBkBRz6S1G87+i5Nv/Mlc9Mv8Xknq5hfraDRVcja/nZs3TNAAP2UINfSPknTz4ejm8b4Is2FH02EPwQgAAEIQAACEIAABCAAAQhAAAIQgAAE1iTwH9Oq46PrVIwqAAAAAElFTkSuQmCC"></image>
                                <text id="laravelxyz" font-family="Nunito-Bold, Nunito" font-size="20" font-weight="bold">
                                    <tspan x="27" y="20" fill="#1A202C">laravel</tspan>
                                    <tspan x="89.734375" y="20" font-family="Nunito-Light, Nunito" font-weight="300" fill="#667EEA">xyz</tspan>
                                </text>
                            </g>
                        </g>
                    </svg>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Laravel XYZ
                </p>
                <!-- <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
                </span> -->
            </div>
        </footer>
    </body>
</html>
