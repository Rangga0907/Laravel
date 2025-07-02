<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Mahasiswa</title>
    
    {{-- Cukup tambahkan link CDN Pico.css ini --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    
    <style>
        /* Sedikit penyesuaian untuk spasi dan tata letak */
        body > main {
            padding: 2rem 1rem;
        }
        .aksi-form {
            display: inline-block;
            margin: 0;
        }
    </style>
</head>
<body>

    <main class="container">
        @yield('content')
    </main>

</body>
</html>