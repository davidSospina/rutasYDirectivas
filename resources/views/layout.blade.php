<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ing SW II')</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>
    <h1>Home</h1>
<!--
    <h1>Home</h1>
    Prática de {{$nombre ?? "No ingreso el nombre"}}
    <br>
    Inyección de scripts <?php echo e($nombre ?? "No ingreso el nombre"); ?>
    <br>
    Inyección de scripts {{ "<script>alert('Ingenieria')</script>" }}
    <br>
    Inyección de scripts <?php echo "<script>alert('Ingenieria')</script>" ?>
-->
</body>
@yield('content')
</html>