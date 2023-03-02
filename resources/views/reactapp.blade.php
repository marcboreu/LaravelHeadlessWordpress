<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="production">
    @vite('resources/js/app.js')
    <!-- React DOM Node -->
    <div id="app"></div>
</body>

</html>