
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite('resources/js/app.js')
</head>
<body>
   

    @include('partials.navbar')

    @yield('contenido')




    

<footer class="bg-dark text-light py-2 fixed-bottom">
    <div class="container text-center">
        <p class="mb-0 ">El Alquimista &copy; {{date('d/m/Y')}}</p>
    </div>
</footer>



</body>
</html>