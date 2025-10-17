<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSHP Universitas Airlangga</title>
    <style>
        body {font-family: Arial, sans-serif; margin: 0;padding: 0; background-color:darkgrey; }
        header {background-color: cadetblue; color: black; padding: 20px; text-align: center;}
        nav {margin-top: 10px;}
        nav a {color: white; text-decoration: none; margin: 0 10px; font-weight: bold;}
        nav a:hover {text-decoration: underline;}
        section {background-color: white; margin: 20px; padding: 20px; border-radius: 8px;}
        h1, h2, h3 {color:darkslategray;}
        table {width: 100%; border-collapse: collapse; margin-top: 10px;}
        table, th, td {border: 1px solid #ccc;}
        th, td {padding: 8px; text-align: left;}
        th {background-color: #e6f0ff;}
        footer {background-color:darkslategray; color: white; text-align: center; padding: 10px; margin-top: 20px;}
        img {display: block; margin: 10px auto; max-width: 100%; border-radius: 8px;}
        p {font-size: medium;}
    </style>
</head>
<body>
    <header>
        <h1>Rumah Sakit Hewan Pendidikan (RSHP) - Universitas Airlangga </h1>
            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('struktur') }}">Struktur Organisasi</a>
                <a href="{{ route('layanan') }}">Layanan Umum</a>
                <a href="{{ route('visi') }}">Visi, Misi, dan Tujuan</a>
                <a href="{{ route('login') }}">Login</a>
            </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 RSHP Universitas Airlangga. All rights reserved.</p>
    </footer>
</body>
</html>
