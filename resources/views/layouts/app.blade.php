<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Bumdes Gondo Bening</title>
    @vite('resources/sass/app.scss', 'resources/css/app.css')
</head>

<body>
    @yield('content')

    @vite('resources/js/app.js')
</body>

</html>
