<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TANJ POS')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        nav {
            background-color: #2c3e50;
            padding: 1rem 2rem;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }
        nav a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #3498db;
        }
        main {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        h1 {
            margin-bottom: 1rem;
            color: #2c3e50;
        }
        p {
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: #fff;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('customers') }}">Customers</a></li>
            <li><a href="{{ route('users') }}">Users</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
