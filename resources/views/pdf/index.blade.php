<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/certificate.css')}}">
    <style>
        @font-face {
            font-family: 'MyFont';
            src: url('{{ public_path("fonts/MyFont-Regular.ttf") }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'MyFont';
            src: url('{{ public_path("fonts/MyFont-Bold.ttf") }}') format('truetype');
            font-weight: bold;
            font-style: normal;
        }
        body { font-family: 'MyFont', sans-serif; }
    </style>
    <title>{{$title}}</title>
</head>
<body>
    <h1>
        {{$heading}}
    </h1>
</body>
</html>
