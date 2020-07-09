<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        .icon::after{
        content: '';
        display: block;
        position: absolute;
        border-top: 23px solid transparent;
        border-bottom: 17px solid transparent;
        border-left: 12px solid #3182ce;
        left: 100%;
        top: 0;
      }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.css">
    <title>LGA</title>


</head>
<body>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>