<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Portfolio</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f3ff;
            color: #333;
        }

        nav {
            background: #6c4ab6;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        @media (max-width: 600px) {
        nav a {
            display: inline-block;
            margin: 8px;
            }

        .container {
            margin: 25px auto;
            padding: 15px;
            }

        .card {
            padding: 25px;
            }
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            color: #6c4ab6;
        }
    </style>
</head>

<body>

    <nav style="
    background: #6c4ab6;
    padding: 18px 20px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
">
    <a href="/" style="
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    ">
        Beranda
    </a>

    <a href="/biodata" style="
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    ">
        Data Diri
    </a>

    <a href="/aktivitas" style="
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    ">
        Aktivitas
    </a>

    <a href="/kontak" style="
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    ">
        Kontak
    </a>
    <a href="/proyek" style="
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    ">
        Proyek
    </a>
    <a href="/dashboard/1" style="
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    ">
        Dashboard
    </a>
    
</nav>

    @yield('content')

</body>
</html>
