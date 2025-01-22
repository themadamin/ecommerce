<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
    <header>
        <x-header/>
    </header>
    {{$slot}}
    <div id="modal"></div>
</body>
</html>
