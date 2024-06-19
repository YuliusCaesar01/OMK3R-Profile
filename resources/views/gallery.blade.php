<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMK3R</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.co.jpg') }}">
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            columns: 5;
            column-gap: 15px;
            padding: 15px;
        }

        img{
            width: 100%;
            margin-bottom: 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<x-navbar> </x-navbar>



<div class="container">
    <img src="{{ asset('img/1.jpg') }}" >
    <img src="{{ asset('img/2.jpg') }}" >
    <img src="{{ asset('img/3.jpg') }}" >
    <img src="{{ asset('img/4.jpg') }}" >
    <img src="{{ asset('img/5.jpg') }}" >
    <img src="{{ asset('img/6.jpg') }}" >
    <img src="{{ asset('img/7.jpg') }}" >
    <img src="{{ asset('img/8.jpg') }}" >
    <img src="{{ asset('img/9.jpg') }}" >

</div>

  
  

  
</body>
<x-footer> </x-footer>
</html>