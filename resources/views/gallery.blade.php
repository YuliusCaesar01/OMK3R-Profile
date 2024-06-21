<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMK3R</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.co.jpg') }}">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 1400px;
            margin: 20px auto;
            columns: 4;
            display: grid;
            gap: 15px;
            padding: 15px;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-auto-rows: masonry;
        }

        .container img {
            width: 100%;
            display: block;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        @media (max-width: 1200px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }

        @media (max-width: 576px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            }
        }
    </style>
</head>
<body>

<x-navbar></x-navbar>

<div class="container">
    <img src="{{ asset('img/1.jpg') }}" class="box"  alt="Image 1">
    <img src="{{ asset('img/2.jpg') }}" class="box"  alt="Image 2">
    <img src="{{ asset('img/3.jpg') }}" class="box"  alt="Image 3">
    <img src="{{ asset('img/4.jpg') }}" class="box"  alt="Image 4">
    <img src="{{ asset('img/5.jpg') }}" class="box"  alt="Image 5">
    <img src="{{ asset('img/6.jpg') }}" class="box"  alt="Image 6">
    <img src="{{ asset('img/7.jpg') }}" class="box"  alt="Image 7">
    <img src="{{ asset('img/8.jpg') }}" class="box"  alt="Image 8">
    <img src="{{ asset('img/9.jpg') }}" class="box"  alt="Image 9">
    <img src="{{ asset('img/10.png') }}" class="box"  alt="Image 10">
    <img src="{{ asset('img/11.png') }}" class="box"  alt="Image 11">
    <img src="{{ asset('img/12.png') }}" class="box"  alt="Image 12">
    <img src="{{ asset('img/13.png') }}" class="box"  alt="Image 13">
    <img src="{{ asset('img/14.png') }}" class="box"  alt="Image 14">
    <img src="{{ asset('img/15.png') }}" class="box"  alt="Image 15">
    <img src="{{ asset('img/16.png') }}" class="box"  alt="Image 16">
    <img src="{{ asset('img/17.png') }}" class="box"  alt="Image 17">
    <img src="{{ asset('img/18.png') }}" class="box"  alt="Image 18">
    <img src="{{ asset('img/19.png') }}" class="box"  alt="Image 19">
    <img src="{{ asset('img/20.png') }}" class="box"  alt="Image 20">
    <img src="{{ asset('img/21.png') }}" class="box"  alt="Image 21">
    <img src="{{ asset('img/22.png') }}" class="box"  alt="Image 22">
    <img src="{{ asset('img/23.png') }}" class="box"  alt="Image 23">
    <img src="{{ asset('img/24.png') }}" class="box"  alt="Image 24">
    <img src="{{ asset('img/25.png') }}" class="box"  alt="Image 25">
    <img src="{{ asset('img/26.png') }}" class="box"  alt="Image 26">

</div>

<x-footer></x-footer>

</body>
</html>
