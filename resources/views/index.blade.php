<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMK3R</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.co.jpg') }}">
    
    <style>
        .bg-custom-image {
            background-image: url('{{ asset('img/home.jpg') }}'); 
            background-size: cover;
            background-position: center;
            padding: 100px 0; /* Increased padding */
            min-height: 600px; /* Set a minimum height */
        }
    </style>
</head>
<body>

<x-navbar></x-navbar>

<section class=" bg-custom-image bg-cover bg-center">
    <div class="py-16 px-4 mx-auto max-w-screen-xl text-center lg:py-32">
        <h1 class="pt-36 mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">Orang Muda Katolik Kristus Raja Purwokerto</h1>
        <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48 dark:text-white">Orang Muda Katolik (OMK) Katedral Kristus Raja Purwokerto adalah komunitas muda Katolik yang dinamis dalam paroki Katedral Kristus Raja Purwokerto di Purwokerto</p>
        </div>
    </div>
</section>


<section class="bg-white dark:bg-gray-900 flex justify-center">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 text-center">
        <div class="max-w-screen-xl mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white ">Orang Muda Katolik itu ngapain aja sih?</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Yuk kita lihat bareng-bareng OMK itu ngapain aja sih kegiatannya!</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Marketing</h3>
                <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all the organization and hit your marketing goals every month with our marketing plan.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Legal</h3>
                <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Business Automation</h3>
                <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Finance</h3>
                <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Enterprise Design</h3>
                <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Operations</h3>
                <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
            </div>
        </div>
    </div>
</section>



<x-footer></x-footer>

</body>
</html>
