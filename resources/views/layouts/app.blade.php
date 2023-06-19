<!DOCTYPE html>
<html>
<head>
    <title>Migas Bryan App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Migas Bryan App</a>
            </div>
        </nav>
        @yield('content')
        @yield('scripts')
    </main>
</body>
</html>