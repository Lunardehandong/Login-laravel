<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de login</title>
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css')}}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            width: 400px;
        }
    </style>
</head>
<body>
    <main class="form-container">
        @yield('content')
    </main>
    <script src="{{ url('/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
