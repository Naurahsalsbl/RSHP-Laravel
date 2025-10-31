<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSHP Universitas Airlangga</title>
    <style>
       /* Reset dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #d3d3d3; /* darkgrey lembut */
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    background-color: #5f9ea0; /* cadetblue lebih lembut */
    color: #fff;
    padding: 25px 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

header h1 {
    font-size: 2rem;
    margin-bottom: 10px;
}

/* Navigation */
nav {
    margin-top: 10px;
}

nav a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 12px;
    font-weight: bold;
    padding: 6px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav a:hover {
    background-color: #ffffff;
    color: #5f9ea0;
    text-decoration: none;
}

/* Section */
section {
    background-color: #ffffff;
    margin: 25px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    max-width: 1000px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

section:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

/* Headings */
h1, h2, h3 {
    color: #2f4f4f; /* darkslategray lebih elegan */
    margin-bottom: 15px;
}

/* Paragraph */
p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 15px;
    text-align: justify;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    border-radius: 8px;
    overflow: hidden;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 12px 10px;
    text-align: left;
}

th {
    background-color: #cce0ff;
    font-weight: 600;
}

/* Footer */
footer {
    background-color: #2f4f4f;
    color: #fff;
    text-align: center;
    padding: 15px 10px;
    margin-top: 30px;
    box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
}

/* Images */
img {
    display: block;
    margin: 15px auto;
    max-width: 100%;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

img:hover {
    transform: scale(1.05);
}

/* Buttons / Links (opsional) */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #5f9ea0;
    color: #fff;
    font-weight: 600;
    border-radius: 8px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    background-color: #4a7c7c;
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 600px) {
    header h1 {
        font-size: 1.5rem;
    }

    section {
        margin: 15px;
        padding: 20px;
    }

    nav a {
        margin: 0 6px;
        padding: 5px 8px;
    }

    table th, table td {
        padding: 8px 6px;
    }
}

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
