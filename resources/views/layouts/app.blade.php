<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
    <nav>
        <a href="/dashboard">dashboard</a> |
        <a href="/books">Buku</a> |
        <a href="/categories">Kategori</a> |
        <a href="/members">Member</a> 
        @can('manage-users')
        | <a href="/users">User</a> 
        @endcan
        
        <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit" onclick="alert('<?php echo 'Anda telah logout!'; ?>')">Logout</button>
        </form>

    </nav>

    <hr>
     </header>

     <main>
    @yield('content')
    </main>

    <footer>
        <hr>
        <p>Library System</p>
    </footer>
</body>
</html>