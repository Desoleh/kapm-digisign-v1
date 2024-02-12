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
    <title>Soft UI Dashboard PRO Tailwind by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Main Styling -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('assets') }}/css/soft-ui-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body
    class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">
    <!-- sidenav -->

    <aside mini="false"
        class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 -translate-x-full bg-white border-0 shadow-none xl:ml-4 dark:bg-gray-950 ease-soft-in-out z-990 max-w-64 rounded-2xl xl:translate-x-0 xl:bg-transparent"
        id="sidenav-main">
        <!-- header -->

        <div class="h-20">
            <!-- x i -->
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden"
                aria-hidden="true" sidenav-close-btn></i>

            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white"
                href=" https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html "
                target="_blank">
                <img src="{{ asset('assets') }}/img/logo-ct-dark.png"
                    class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:hidden"
                    alt="main_logo" />
                <img src="{{ asset('assets') }}/img/logo-ct.png"
                    class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:inline-block"
                    alt="main_logo" />

                <span class="ml-1 font-semibold transition-all duration-200 ease-soft-in-out">Soft UI Dashboard
                    PRO</span>
            </a>
        </div>

        <!-- //---------hr----------// -->

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">
            <!-- primary list  -->

            <ul class="flex flex-col pl-0 mb-0 list-none">
                <!-- primary list item -->

                <li class="mt-0.5 w-full">
                    <!-- primary anchor  -->

                    <a collapse_trigger="primary" href="javascript:;"
                        class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80"
                        aria-expanded="true">
                        <!-- big anchor expandable -->
                        <div
                            class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <!-- icon -->

                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class=""
                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                    opacity="0.598981585"></path>
                                                <path class=""
                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <!-- primary span -->

                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700">Dashboards</span>
                    </a>

                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out"
                        id="dashboardsExamples">
                        <!-- primary collapsable list -->
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <!-- medium list item  -->
                            <li class="w-full">
                                <!-- medium a -->
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-5 relative my-0 mr-4 flex items-center whitespace-nowrap rounded-lg bg-transparent pr-4 font-semibold text-slate-800 shadow-none transition-colors before:absolute before:top-1/2 before:h-2 before:w-2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800 before:content-[''] dark:text-white dark:opacity-100 dark:before:bg-white dark:before:opacity-80"
                                    href="{{ route('dashboard') }}">
                                    <!-- mini span -->
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        D </span>

                                    <!-- estended span -->
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Default
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/dashboards/automotive.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        A </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Automotive
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/dashboards/smart-home.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        S </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Smart Home
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <!-- medium a collapsable  -->
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        V </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Virtual
                                        Reality <b class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="vrExamples">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <!-- small a -->
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/dashboards/vr/vr-default.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out text-xs">
                                                    V </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    VR Default </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/dashboards/vr/vr-info.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out text-xs">
                                                    V </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    VR Info </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/dashboards/crm.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        C </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> CRM </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60 dark:text-white">PAGES
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a collapse_trigger="primary" href="javascript:;"
                        class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>office</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g id="office" transform="translate(153.000000, 2.000000)">
                                                <path class="fill-slate-800"
                                                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                    opacity="0.6"></path>
                                                <path class="fill-slate-800"
                                                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pages</span>
                    </a>

                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                        id="pagesExamples">
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        P </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Profile <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="profileExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/profile/overview.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    P </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Profile Overview </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/profile/teams.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    T </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Teams </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/profile/projects.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    A </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    All Projects </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        U </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Users <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="usersExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/users/reports.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    R </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Reports </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/users/new-user.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    N </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    New User </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        A </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Account <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="accountExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/account/settings.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out text-xs">
                                                    S </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Settings </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/account/billing.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out text-xs">
                                                    B </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Billing </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/account/invoice.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out text-xs">
                                                    I </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Invoice </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/account/security.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out text-xs">
                                                    S </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Security </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        P </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Projects <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="projectsExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/projects/general.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    G </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    General </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/projects/timeline.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    T </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Timeline </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/pages/projects/new-project.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    N </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    New Project </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/pricing-page.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        P </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Pricing
                                        Page </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/messages.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        M </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Messages
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/rtl-page.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        R </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> RTL </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/widgets.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        W </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Widgets
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/charts.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        C </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Charts
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/sweet-alerts.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        S </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Sweet
                                        Alerts </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/pages/notifications.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        N </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft">
                                        Notifications </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Applications -->

                <li class="mt-0.5 w-full">
                    <a collapse_trigger="primary" href="javascript:;"
                        class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                        aria-controls="applicationsExamples" role="button" aria-expanded="false">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>settings</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(304.000000, 151.000000)">
                                                <polygon class="fill-slate-800" opacity="0.596981957"
                                                    points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                </polygon>
                                                <path class="fill-slate-800"
                                                    d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                    opacity="0.596981957"></path>
                                                <path class="fill-slate-800"
                                                    d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Applications</span>
                    </a>
                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                        id="applicationsExamples">
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/applications/kanban.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        K </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Kanban
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/applications/wizard.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        W </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Wizard
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/applications/datatables.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        D </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> DataTables
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/applications/calendar.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        C </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Calendar
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/applications/analytics.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        A </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Analytics
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Ecommerce  -->

                <li class="mt-0.5 w-full">
                    <a collapse_trigger="primary" href="javascript:;"
                        class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                        aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>basket</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g id="basket" transform="translate(153.000000, 450.000000)">
                                                <path class="fill-slate-800"
                                                    d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z"
                                                    opacity="0.595377604"></path>
                                                <path class="fill-slate-800"
                                                    d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Ecommerce</span>
                    </a>

                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                        id="ecommerceExamples">
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/ecommerce/overview.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        O </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Overview
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        P </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Products <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="productsExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/ecommerce/products/new-product.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    N </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    New Product </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/ecommerce/products/edit-product.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    E </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Edit Product </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/ecommerce/products/product-page.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    P </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Product Page </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/ecommerce/products/products-list.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    P </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Products List </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        O </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Orders <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="ordersExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/ecommerce/orders/list.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    O </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Order List </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/ecommerce/orders/details.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    O </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Order Details </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="../../pages/ecommerce/referral.html">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        R </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Referral
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a collapse_trigger="primary" href="javascript:;"
                        class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                        aria-controls="authExamples" role="button" aria-expanded="false">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>document</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(154.000000, 300.000000)">
                                                <path class="fill-slate-800"
                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                    opacity="0.603585379"></path>
                                                <path class="fill-slate-800"
                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Authentication</span>
                    </a>

                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                        id="authExamples">
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        S </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Sign In <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="signinExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/signin/basic.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    B </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Basic </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/signin/cover.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Cover </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/signin/illustration.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    I </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        S </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Sign Up <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="signupExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/signup/basic.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    B </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Basic </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/signup/cover.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Cover </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/signup/illustration.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    I </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        R </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Reset
                                        Password <b class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="resetExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/reset/basic.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    B </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Basic </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/reset/cover.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Cover </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/reset/illustration.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    I </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        L </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Lock <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="lockExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/lock/basic.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    B </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Basic </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/lock/cover.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Cover </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/lock/illustration.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    I </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        2 </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> 2-Step
                                        Verification <b class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="StepExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/verification/basic.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    B </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Basic </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/verification/cover.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Cover </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/verification/illustration.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    I </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        E </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Error <b
                                            class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="errorExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/error/404.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    E </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Error 404 </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="../../pages/authentication/error/500.html">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    E </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Error 500 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <hr
                        class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                    <h6 class="pl-6 mb-2 ml-2 font-bold leading-tight uppercase text-xs opacity-60 dark:text-white">DOCS
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a collapse_trigger="primary" href="javascript:;"
                        class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                        aria-controls="basicExamples" role="button" aria-expanded="false">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>spaceship</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(4.000000, 301.000000)">
                                                <path class="fill-slate-800"
                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                </path>
                                                <path class="fill-slate-800"
                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                </path>
                                                <path class="fill-slate-800"
                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                    opacity="0.598539807"></path>
                                                <path class="fill-slate-800"
                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                    opacity="0.598539807"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Basic</span>
                    </a>

                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                        id="basicExamples">
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        G </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Getting
                                        Started <b class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="gettingStartedExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                                                target="_blank">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    Q </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Quick Start </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/license/soft-ui-dashboard/"
                                                target="_blank">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    L </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    License </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/what-is-tailwind-css/soft-ui-dashboard/"
                                                target="_blank">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Contents </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="w-full">
                                <a collapse_trigger="secondary"
                                    class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80 dark:after:text-white/50 dark:after:text-white"
                                    aria-expanded="false" href="javascript:;">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        F </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Foundation
                                        <b class="caret"></b></span>
                                </a>

                                <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                                    id="foundationExample">
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-soft-in-out">
                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/colors/soft-ui-dashboard/"
                                                target="_blank">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    C </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Colors </span>
                                            </a>
                                        </li>

                                        <li class="w-full">
                                            <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-3.4 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                                href="https://www.creative-tim.com/learning-lab/tailwind/html/typography/soft-ui-dashboard/"
                                                target="_blank">
                                                <span
                                                    class="w-0 leading-tight text-center transition-all duration-200 opacity-0 pointer-events-none text-xs ease-soft-in-out">
                                                    T </span>
                                                <span class="transition-all duration-100 pointer-events-none ease-soft">
                                                    Typography </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a collapse_trigger="primary" href="javascript:;"
                        class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                        aria-controls="componentsExamples" role="button" aria-expanded="false">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>customer-support</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="fill-slate-800"
                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                    opacity="0.59858631"></path>
                                                <path class="fill-slate-800"
                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                </path>
                                                <path class="fill-slate-800"
                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Components</span>
                    </a>

                    <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out max-h-0"
                        id="componentsExamples">
                        <ul
                            class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/alert/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        A </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Alerts
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/chip/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        B </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Badge
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/button/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        B </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Buttons
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/card/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        C </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Card
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/collapse/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        C </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Collapse
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/dropdown/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        D </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Dropdowns
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/input/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        F </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Forms
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/modal/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        M </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Modal
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/tabs/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        N </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Navs
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/navbar/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        N </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Navbar
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/progress/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        P </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Progress
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/table/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        T </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Tables
                                    </span>
                                </a>
                            </li>

                            <li class="w-full">
                                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80"
                                    href="https://www.creative-tim.com/learning-lab/tailwind/html/tooltip/soft-ui-dashboard/"
                                    target="_blank">
                                    <span
                                        class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out">
                                        T </span>
                                    <span class="transition-all duration-100 pointer-events-none ease-soft"> Tooltips
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-soft-in-out text-sm py-2.7 active my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors dark:text-white dark:opacity-80"
                        href="https://github.com/creativetimofficial/ct-soft-ui-dashboard-pro-tailwind/blob/main/CHANGELOG.md"
                        target="_blank">
                        <div
                            class="stroke-none shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(453.000000, 454.000000)">
                                                <path class="fill-slate-800"
                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                    opacity="0.593633743"></path>
                                                <path class="fill-slate-800"
                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Changelog</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="pt-4 mx-4 mt-4">
            <!-- load phantom colors for card after: -->
            <p
                class="invisible hidden text-red-600 text-orange after:bg-gradient-to-tl after:from-gray-900 after:to-slate-800 after:bg-gradient-to-tl after:from-blue-600 after:to-cyan-400 after:bg-gradient-to-tl after:from-red-500 after:to-yellow-400 after:bg-gradient-to-tl after:from-green-600 after:to-lime-400 after:bg-gradient-to-tl after:from-red-600 after:to-rose-400 after:bg-gradient-to-tl after:from-slate-600 after:to-slate-300 text-lime-500 text-cyan-500">
            </p>
            <div sidenav-card
                class="after:opacity-65 after:bg-gradient-to-tl after:from-slate-600 after:to-slate-300 relative flex min-w-0 flex-col items-center break-words rounded-2xl border-0 border-solid border-blue-900 bg-white bg-clip-border shadow-none after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl after:content-['']">
                <div class="absolute w-full h-full bg-center bg-cover mb-7 rounded-2xl"
                    style="background-image: url('{{ asset('assets') }}/img/curved-images/white-curved.jpg')"></div>
                <div class="relative z-20 flex-auto w-full p-4 text-left text-white">
                    <div
                        class="flex items-center justify-center w-8 h-8 mb-4 text-center bg-white bg-center rounded-lg icon shadow-soft-2xl">
                        <i sidenav-card-icon
                            class="top-0 z-10 text-transparent ni leading-none ni-diamond text-lg bg-gradient-to-tl from-slate-600 to-slate-300 bg-clip-text opacity-80"
                            aria-hidden="true"></i>
                    </div>
                    <div class="transition-all duration-200 ease-nav-brand">
                        <h6 class="mb-0 text-white">Need help?</h6>
                        <p class="mt-0 mb-4 font-semibold leading-tight text-xs">Please check our docs</p>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                            target="_blank"
                            class="inline-block w-full px-8 py-2 mb-0 font-bold text-center text-black uppercase transition-all ease-in bg-white border-0 border-white rounded-lg shadow-soft-md bg-150 leading-pro text-xs hover:shadow-soft-2xl hover:scale-102">Documentation</a>
                    </div>
                </div>
            </div>
            <!-- pro btn  -->
            <!-- <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree">Upgrade to pro</a> -->
        </div>
    </aside>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        <nav navbar-main
            class=" flex flex-wrap items-center justify-between px-0 py-2 mx-6 mt-6 transition-all duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start sticky top-[1%] backdrop-saturate-200 backdrop-blur-2xl bg-white/80 shadow-blur z-110 dark:bg-gray-950/80 dark:shadow-dark-blur"
            navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="leading-normal text-sm breadcrumb-item">
                            <a class="text-slate-700 opacity-30 dark:text-white" href="javascript:;">
                                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>shop</title>
                                    <g class="dark:fill-white" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g class="dark:fill-white" transform="translate(-1716.000000, -439.000000)"
                                            fill="#252f40" fill-rule="nonzero">
                                            <g class="dark:fill-white" transform="translate(1716.000000, 291.000000)">
                                                <g class="dark:fill-white" transform="translate(0.000000, 148.000000)">
                                                    <path
                                                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                    </path>
                                                    <path
                                                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        @php
                        $url = request()->getPathInfo();
                        $items = explode('/', $url);
                        unset($items[0]);
                        @endphp
                        @foreach ($items as $key => $item)
                        @if ($key == count($items))
                        <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/'] dark:text-white dark:before:text-white"
                            aria-current="page">{{ Str::ucfirst($item) }}</li>
                        @else
                        <li
                            class="text-sm pl-2 leading-normal before:float-left before:pr-2 before:text-gray-600 before:content-['/']">
                            <a class="opacity-50 text-slate-700 dark:text-white" href="/{{ $item }}">{{
                                Str::ucfirst($item) }}</a>
                        </li>
                        @endif
                        @endforeach
                    </ol>
                    <h6 class="mb-0 font-bold capitalize dark:text-white">{{ Str::ucfirst($item) }}</h6>
                </nav>

                <div class="flex items-center">
                    <a mini-sidenav-burger href="javascript:;"
                        class="hidden p-0 transition-all ease-nav-brand text-sm text-slate-500 xl:block"
                        aria-expanded="false">
                        <div class="w-4.5 overflow-hidden">
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 translate-x-[5px] rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i
                                class="ease-soft relative block h-0.5 translate-x-[5px] rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                        </div>
                    </a>
                </div>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto" id="navbar">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                            <span
                                class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </span>
                            <input type="text"
                                class="pl-9 text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                placeholder="Type here..." />
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <!-- online builder btn  -->
                        <!-- <li class="flex items-center">
              <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
            </li> -->
                        <li class="flex items-center">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a sidenav-trigger
                                class="block p-0 transition-all ease-nav-brand text-sm text-slate-500 dark:text-white"
                                href="javascript:;" aria-expanded="false">
                                <div class="w-4.5 overflow-hidden">
                                    <i
                                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                                    <i
                                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                                    <i
                                        class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a href="javascript:;"
                                class="p-0 transition-all text-sm ease-nav-brand text-slate-500 dark:text-white">
                                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                        <!-- notifications -->

                        <li class="relative flex items-center pr-2">
                            <p class="hidden transform-dropdown-show"></p>
                            <a dropdown-trigger href="javascript:;"
                                class="block p-0 transition-all text-sm ease-nav-brand text-slate-500 dark:text-white"
                                aria-expanded="false">
                                <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                            </a>

                            <ul dropdown-menu
                                class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7 before:text-5.5 dark:bg-gray-950 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="group ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-gray-200/80 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets') }}/img/team-2.jpg"
                                                    class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6
                                                    class="mb-1 font-normal leading-normal text-sm group-hover:text-slate-700 dark:text-white">
                                                    <span class="font-semibold">New message</span> from Laur
                                                </h6>
                                                <p
                                                    class="mb-0 leading-tight text-xs text-slate-400 group-hover:text-slate-700 dark:text-white dark:opacity-80">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative mb-2">
                                    <a class="group ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-gray-200/80"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets') }}/img/small-logos/logo-spotify.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6
                                                    class="mb-1 font-normal leading-normal text-sm group-hover:text-slate-700 dark:text-white">
                                                    <span class="font-semibold">New album</span> by Travis Scott
                                                </h6>
                                                <p
                                                    class="mb-0 leading-tight text-xs text-slate-400 group-hover:text-slate-700 dark:text-white dark:opacity-80">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="group ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-gray-200/80"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div
                                                class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6
                                                    class="mb-1 font-normal leading-normal text-sm group-hover:text-slate-700 dark:text-white">
                                                    Payment successfully completed</h6>
                                                <p
                                                    class="mb-0 leading-tight text-xs text-slate-400 group-hover:text-slate-700 dark:text-white dark:opacity-80">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="relative z-20 w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-7/12">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-transparent border-0 border-solid shadow-none border-black-125 rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap -ml-3">
                                <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-6/12">
                                    <div class="flex flex-col h-full">
                                        <h2 class="mb-0 font-bold dark:text-white">General Statistics</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 sm:flex-0 shrink-0 sm:w-6/12 lg:w-5/12">
                            <div
                                class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex-none w-2/3 max-w-full px-3">
                                            <div>
                                                <p
                                                    class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">
                                                    Today's Money</p>
                                                <h5 class="mb-0 font-bold dark:text-white">
                                                    $53,000
                                                    <span
                                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="w-4/12 max-w-full px-3 text-right flex-0">
                                            <div
                                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex-none w-2/3 max-w-full px-3">
                                            <div>
                                                <p
                                                    class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">
                                                    Today's Users</p>
                                                <h5 class="mb-0 font-bold dark:text-white">
                                                    2,300
                                                    <span
                                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="w-4/12 max-w-full px-3 text-right flex-0">
                                            <div
                                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full max-w-full px-3 mt-6 sm:flex-0 shrink-0 sm:mt-0 sm:w-6/12 lg:w-5/12">
                            <div
                                class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex-none w-2/3 max-w-full px-3">
                                            <div>
                                                <p
                                                    class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">
                                                    New Clients</p>
                                                <h5 class="mb-0 font-bold dark:text-white">
                                                    +3,462
                                                    <span
                                                        class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="w-4/12 max-w-full px-3 text-right flex-0">
                                            <div
                                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex-none w-2/3 max-w-full px-3">
                                            <div>
                                                <p
                                                    class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">
                                                    Sales</p>
                                                <h5 class="mb-0 font-bold dark:text-white">
                                                    $103,430
                                                    <span
                                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="w-4/12 max-w-full px-3 text-right flex-0">
                                            <div
                                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mt-6 -mx-3">
                        <div class="w-full max-w-full px-3 flex-0 lg:w-10/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid dark:bg-gray-950 border-black-125 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                                <div class="p-4 pb-0 mb-0 rounded-t-4">
                                    <div class="flex justify-between">
                                        <h6 class="mb-2 dark:text-white">Sales by Country</h6>
                                    </div>
                                </div>
                                {{ $slot }}

                                <div class="overflow-x-auto">
                                    <table
                                        class="items-center w-full mb-4 align-top border-gray-200 dark:border-white/40">
                                        <tbody>
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                                    <div class="flex items-center px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/icons/flags/US.png"
                                                                alt="Country flag" />
                                                        </div>
                                                        <div class="ml-6">
                                                            <p
                                                                class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                                Country:</p>
                                                            <h6 class="mb-0 leading-normal text-sm dark:text-white">
                                                                United States</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Sales:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">2500
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Value:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">$230,900
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 leading-normal align-middle bg-transparent border-b text-sm whitespace-nowrap dark:border-white/40">
                                                    <div class="flex-1 text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Bounce:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">29.9%
                                                        </h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                                    <div class="flex items-center px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/icons/flags/DE.png"
                                                                alt="Country flag" />
                                                        </div>
                                                        <div class="ml-6">
                                                            <p
                                                                class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                                Country:</p>
                                                            <h6 class="mb-0 leading-normal text-sm dark:text-white">
                                                                Germany</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Sales:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">3.900
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Value:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">$440,000
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 leading-normal align-middle bg-transparent border-b text-sm whitespace-nowrap dark:border-white/40">
                                                    <div class="flex-1 text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Bounce:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">40.22%
                                                        </h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                                    <div class="flex items-center px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/icons/flags/GB.png"
                                                                alt="Country flag" />
                                                        </div>
                                                        <div class="ml-6">
                                                            <p
                                                                class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                                Country:</p>
                                                            <h6 class="mb-0 leading-normal text-sm dark:text-white">
                                                                Great Britain</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Sales:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">1.400
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Value:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">$190,700
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 leading-normal align-middle bg-transparent border-b text-sm whitespace-nowrap dark:border-white/40">
                                                    <div class="flex-1 text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Bounce:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">23.44%
                                                        </h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                                    <div class="flex items-center px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/icons/flags/BR.png"
                                                                alt="Country flag" />
                                                        </div>
                                                        <div class="ml-6">
                                                            <p
                                                                class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                                Country:</p>
                                                            <h6 class="mb-0 leading-normal text-sm dark:text-white">
                                                                Brasil</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Sales:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">562</h6>
                                                    </div>
                                                </td>
                                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                                    <div class="text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Value:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">$143,960
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 leading-normal align-middle bg-transparent border-0 text-sm whitespace-nowrap">
                                                    <div class="flex-1 text-center">
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                            Bounce:</p>
                                                        <h6 class="mb-0 leading-normal text-sm dark:text-white">32.14%
                                                        </h6>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mt-6 -mx-3">
                <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
                    <div
                        class="relative z-20 flex flex-col min-w-0 break-words bg-white border-0 border-solid dark:bg-gray-950 border-black-125 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div
                                class="py-4 pr-1 mb-4 bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 rounded-xl">
                                <div>
                                    <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                            <h6 class="mt-6 mb-0 ml-2 dark:text-white">Active Users</h6>
                            <p class="ml-2 leading-normal text-sm dark:opacity-60">(<span class="font-bold">+23%</span>)
                                than last week</p>
                            <div class="w-full px-6 mx-auto max-w-screen-2xl rounded-xl">
                                <div class="flex flex-wrap mt-0 -mx-3">
                                    <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                        <div class="flex mb-2">
                                            <div
                                                class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-purple-700 to-pink-500 text-neutral-900">
                                                <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>document</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -591.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(154.000000, 300.000000)">
                                                                    <path class="color-background"
                                                                        d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                        opacity="0.603585379"></path>
                                                                    <path class="color-background"
                                                                        d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p class="mt-1 mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                Users</p>
                                        </div>
                                        <h4 class="font-bold dark:text-white">36K</h4>
                                        <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                            <div class="duration-600 ease-soft -mt-0.4 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                                role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                        <div class="flex mb-2">
                                            <div
                                                class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-blue-600 to-cyan-400 text-neutral-900">
                                                <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>spaceship</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1720.000000, -592.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(4.000000, 301.000000)">
                                                                    <path class="color-background"
                                                                        d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                    </path>
                                                                    <path class="color-background"
                                                                        d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                    </path>
                                                                    <path class="color-background"
                                                                        d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                        opacity="0.598539807"></path>
                                                                    <path class="color-background"
                                                                        d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                        opacity="0.598539807"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p class="mt-1 mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                Clicks</p>
                                        </div>
                                        <h4 class="font-bold dark:text-white">2m</h4>
                                        <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                            <div class="duration-600 ease-soft -mt-0.4 w-9/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                                role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                        <div class="flex mb-2">
                                            <div
                                                class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-red-500 to-yellow-400 text-neutral-900">
                                                <svg width="10px" height="10px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p class="mt-1 mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                Sales</p>
                                        </div>
                                        <h4 class="font-bold dark:text-white">435$</h4>
                                        <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                            <div class="duration-600 ease-soft -mt-0.4 w-3/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                                role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                        <div class="flex mb-2">
                                            <div
                                                class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-red-600 to-rose-400 text-neutral-900">
                                                <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>settings</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2020.000000, -442.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(304.000000, 151.000000)">
                                                                    <polygon class="color-background"
                                                                        opacity="0.596981957"
                                                                        points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                    </polygon>
                                                                    <path class="color-background"
                                                                        d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                        opacity="0.596981957"></path>
                                                                    <path class="color-background"
                                                                        d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <p class="mt-1 mb-0 font-semibold leading-tight text-xs dark:opacity-60">
                                                Items</p>
                                        </div>
                                        <h4 class="font-bold dark:text-white">43</h4>
                                        <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                            <div class="duration-600 ease-soft -mt-0.4 -ml-px flex h-1.5 w-1/2 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                                role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
                    <div
                        class="relative z-20 flex flex-col min-w-0 break-words bg-white border-0 border-solid dark:bg-gray-950 border-black-125 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-solid border-black-125 rounded-t-2xl">
                            <h6 class="dark:text-white">Sales overview</h6>
                            <p class="leading-normal text-sm dark:opacity-60">
                                <i class="fa fa-arrow-up text-lime-500" aria-hidden="true"></i>
                                <span class="font-semibold">4% more</span> in 2021
                            </p>
                        </div>
                        <div class="flex-auto p-4">
                            <div>
                                <canvas id="chart-line" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    <div id="globe" class="absolute right-0 mt-24 lg-max:overflow-hidden top-1/10 sm:mt-4 lg:mr-24">
                        <canvas width="700" height="600"
                            class="w-3/4 -mr-48 h-3/4 lg-max:w-full lg:mt-12 lg:mr-0 lg:w-full"></canvas>
                    </div>
                </div>
            </div>

            <footer class="pt-4">
                <div class="w-full px-6 mx-auto">
                    <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                            <div class="leading-normal text-center copyright text-sm text-slate-500 lg:text-left">
                                ©
                                <script>
                                    document.write(new Date().getFullYear() + ",");
                                </script>
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com"
                                    class="font-semibold text-slate-700 dark:text-white" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                            <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com"
                                        class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation"
                                        class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://creative-tim.com/blog"
                                        class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license"
                                        class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <div fixed-plugin>
        <a fixed-plugin-button
            class="fixed px-4 py-2 bg-white cursor-pointer bottom-7 right-7 text-xl z-990 shadow-soft-lg rounded-circle text-slate-700"
            aria-expanded="false">
            <i class="py-2 pointer-events-none fa fa-cog"> </i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div fixed-plugin-card
            class="dark:bg-gray-950/80 z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 backdrop-blur-2xl backdrop-saturate-200 duration-200">
            <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="float-left">
                    <h5 class="mt-4 mb-0 dark:text-white">Soft UI Configurator</h5>
                    <p class="dark:text-white dark:opacity-60">See our dashboard options.</p>
                </div>
                <div class="float-right mt-6">
                    <button fixed-plugin-close-button
                        class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700 dark:text-white">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr
                class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="flex-auto p-6 pt-0 sm:pt-4">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0 dark:text-white">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="my-2 text-left" sidenav-colors>
                        <span
                            class="py-2.2 text-xs px-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 ease-soft-in-out bg-gradient-to-tl from-purple-700 to-pink-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            active-color data-color-from="purple-700" data-color-to="pink-500"
                            onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs px-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color-from="gray-900" data-color-to="slate-800" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs px-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-cyan-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color-from="blue-600" data-color-to="cyan-400" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs px-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 ease-soft-in-out bg-gradient-to-tl from-green-600 to-lime-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color-from="green-600" data-color-to="lime-400" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs px-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 ease-soft-in-out bg-gradient-to-tl from-red-500 to-yellow-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color-from="red-500" data-color-to="yellow-400" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs px-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 ease-soft-in-out bg-gradient-to-tl from-red-600 to-rose-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color-from="red-600" data-color-to="rose-400" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-4">
                    <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
                    <p class="leading-normal text-sm dark:opacity-60">Choose between 2 different sidenav types.</p>
                </div>
                <div class="flex">
                    <button transparent-style-btn
                        class="inline-block w-full px-4 py-3 mb-2 font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500 dark:pointer-events-none dark:cursor-not-allowed"
                        data-class="bg-transparent" active-style>Transparent</button>
                    <button white-style-btn
                        class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500 dark:pointer-events-none dark:cursor-not-allowed"
                        data-class="bg-white">White</button>
                </div>
                <p class="block mt-2 leading-normal text-sm xl:hidden">You can change the sidenav type just on desktop
                    view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-4">
                    <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
                </div>
                <div class="min-h-6 mb-0.5 block pl-0">
                    <input navbar-fixed-toggle
                        class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                        type="checkbox" />
                </div>
                <hr
                    class="h-px mt-4 mb-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                <div class="mt-2">
                    <h6 class="mb-0 dark:text-white">Sidenav Mini</h6>
                </div>
                <div class="min-h-6 mb-0.5 block pl-0">
                    <input sidenav-mini-toggle
                        class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                        type="checkbox" />
                </div>
                <hr
                    class="h-px mt-4 mb-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                <div class="mt-2">
                    <h6 class="mb-0 dark:text-white">Light/Dark</h6>
                </div>
                <div class="min-h-6 mb-0.5 block pl-0">
                    <input dark-toggle
                        class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                        type="checkbox" />
                </div>
                <hr
                    class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-600 to-cyan-400"
                    href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-tailwind" target="_blank">Buy
                    Now</a>
                <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border border-transparent border-solid rounded-lg cursor-pointer leading-pro text-xs ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 dark:border-white dark:text-white"
                    href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" target="_blank">Free Demo</a>
                <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none dark:border-white dark:text-white"
                    href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                    target="_blank">View documentation</a>
                <div class="w-full text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/ct-soft-ui-dashboard-pro"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-4">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Pro%20Tailwind%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23tailwindCSS&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro-tailwind"
                        class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                        target="_blank"> <i class="mr-1 fab fa-twitter" aria-hidden="true"></i> Tweet </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-pro-tailwind"
                        class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                        target="_blank"> <i class="mr-1 fab fa-facebook-square" aria-hidden="true"></i> Share </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/threejs.js"></script>
<script src="{{ asset('assets') }}/js/plugins/orbit-controls.js"></script>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<!-- main script file  -->
<script src="{{ asset('assets') }}/js/soft-ui-dashboard-pro-tailwind.js?v=1.0.1"></script>

</html>