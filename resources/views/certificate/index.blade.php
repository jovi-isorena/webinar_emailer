<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('start') }}">Click to Start</a>
    <p style="font-weight:bold">{{$sent->count()}} sent certificates</p>
    <p style="font-weight:bold">{{$certificates->count()}} certificates to send</p>
    @foreach ($certificates as $certificate)
        <p>{{ $certificate->name }}</p>
    @endforeach
</body>
</html>