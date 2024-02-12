<!--
=========================================================
* Soft UI Dashboard Pro Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-pro-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png" />
    <title>{{ $title ?? 'KAI Properti' }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('assets') }}/css/soft-ui-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body
    class="m-0 font-sans antialiased font-normal text-left bg-white leading-default text-base dark:bg-slate-950 text-slate-500 dark:text-white/80">
    <!-- sidenav -->

    <div class="container sticky top-0 z-110 ">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">

                <nav
                    class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mx-6 my-4 shadow-soft-2xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 rounded-blur lg:flex-nowrap lg:justify-start">

                    <div
                        class="container flex flex-wrap items-center justify-between lg-max:overflow-hidden lg:flex-nowrap">

                        <a class="py-2.5 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                            href="/dashboard">KAI Properti</a>

                    </div>
                </nav>
            </div>
        </div>
    </div>


    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                <div class="container z-1">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex flex-col w-full max-w-full px-12 mx-auto flex-0 md:w-8/12 lg:w-6/12 xl:w-5/12">
                            {{ $slot }}
                            

                        </div>
                        <div class="w-full max-w-full px-3 my-auto shrink-0 md:flex-0 md:w-6/12">
                            <div
                                class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block ">
                                <div
                                    class="skew-x-10 bg-cover -ml-16 h-full absolute inset-x-0 top-0 bg-[url('../../assets/img/curved-images/curved9.jpg')]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer class="py-12">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 mx-auto mt-2 mb-6 text-center shrink-0 lg:flex-0 lg:w-8/12">
                    <a href="javascript:;" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-github" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        PT KA Properti Manajemen
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<!-- main script file  -->
<script src="{{ asset('assets') }}/js/soft-ui-dashboard-pro-tailwind.js?v=1.0.1"></script>

</html>