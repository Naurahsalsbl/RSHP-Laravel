<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    body { margin:0; font-family: Arial, sans-serif; }
    .navbar {
      background: #3498db;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar a {
      color: white;
      text-decoration: none;
      padding: 8px 12px;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background: white;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 10px 15px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    main {
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div><a href="{{ route('admin.dashboard') }}"><b>Dashboard</b></a></div>
    <div>
      <div class="dropdown">
        <a href="#">Data Master ▾</a>
        <div class="dropdown-content">
          <a href="{{ route('role.index') }}">Manajemen Role</a>
          <a href="{{ route('user.index') }}">Data User</a>
          <a href="{{ route('jenis-hewan.index') }}">Jenis Hewan</a>
          <a href="{{ route('ras-hewan.index') }}">Ras Hewan</a>
          <a href="{{ route('pemilik.index') }}">Data Pemilik</a>
          <a href="{{ route('pet.index') }}">Data Pet</a>
          <a href="{{ route('kategori.index') }}">Data Kategori</a>
          <a href="{{ route('kategori-klinis.index') }}">Data Kategori Klinis</a>
          <a href="{{ route('kode-tindakan-terapi.index') }}">Data Kode Tindakan Terapi</a>
        </div>
      </div>
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
         Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
          @csrf
      </form>
    </div>
  </div>

  <main>
    @yield('content')
  </main>

</body>
</html>
