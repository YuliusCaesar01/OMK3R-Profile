<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMK3R - Contact Us</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.co.jpg') }}">
</head>
<body class="bg-gray-100">

<x-navbar></x-navbar>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Yuk Gabung OMK!</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Tertarik untuk bergabung dengan kami?  Hubungi kami menggunakan formulir atau Hubungi kami melalui Whatsapp dibawah ini.</p>
        <form action="#" method="POST" class="space-y-8">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Name</label>
                <input type="text" id="name" name="name" class="block w-full p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
                <input type="email" id="email" name="email" class="block w-full p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Message</label>
                <textarea id="message" name="message" rows="6" class="block w-full p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Tell us how you want to join or any other inquiries..." required></textarea>
            </div>
            <div class="flex justify-center items-center">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
            </div>        
        </form>
        <div class="mt-8 text-center">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Follow Us</h3>
            <p class="text-gray-500 dark:text-gray-400">Stay connected with us on social media!</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="https://www.instagram.com/omk3r" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-[42px] h-[42px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                      </svg>
                </a>
                <a href="https://wa.me/+628995320707?text=Saya%20ingin%20gabung%20gabung%20OMK" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-[42px] h-[42px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                        <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                        <path d="M20.52 3.48a11.947 11.947 0 00-16.92 0 11.951 11.951 0 000 16.92L3 23.26l3.86-1.08a11.951 11.951 0 0016.92-16.92zM12 21.25a9.258 9.258 0 01-4.82-1.38l-.35-.2-2.28.64.65-2.28-.2-.35A9.25 9.25 0 1121.25 12 9.26 9.26 0 0112 21.25z"></path>
                        <path d="M16.5 13.5c-.25-.13-1.48-.73-1.7-.81-.23-.08-.4-.13-.57.13-.17.25-.65.81-.8.97-.15.17-.3.19-.56.07-.26-.13-1.08-.4-2.06-1.27-.76-.68-1.27-1.52-1.42-1.78-.15-.25-.02-.39.11-.51.12-.12.25-.3.38-.45.13-.15.17-.25.26-.42.08-.17.04-.32-.02-.45-.06-.13-.57-1.35-.78-1.85-.2-.48-.41-.42-.57-.43H8.35c-.15 0-.4.06-.61.32-.21.26-.79.77-.79 1.88s.81 2.18.92 2.33c.11.15 1.57 2.39 3.8 3.36.53.23.94.37 1.26.48.53.17 1.02.14 1.41.09.43-.06 1.48-.61 1.69-1.2.21-.59.21-1.09.15-1.2-.06-.1-.23-.16-.48-.29z"></path>
                    </svg>
                      
                </a>
            </div>
        </div>
    </div>
</section>

<x-footer></x-footer>
</body>
</html>
