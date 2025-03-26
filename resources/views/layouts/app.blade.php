<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat App Qiscus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .app {
            display: flex;
            height: 100vh;
        }

        .content {
            display: flex;
            flex-grow: 1;
            overflow: hidden;
        }

        .main-wrapper {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            height: 100vh;
        }

        .container {
            flex-grow: 1;
            overflow-y: auto;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="app">
        <div class="content d-flex">
            @include('components.sidebar')
            <div class="main-wrapper flex-grow-1">
                {{-- @include('components.navbar') --}}
                @yield('content')
                <div class="container-fluid d-flex flex-column flex-grow-1 overflow-auto mt-3">
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
        var sidebar = document.getElementById('sidebar');
        if (sidebar.classList.contains('d-none')) {
            sidebar.classList.remove('d-none');
            sidebar.classList.add('d-flex');
        } else {
            sidebar.classList.remove('d-flex');
            sidebar.classList.add('d-none');
        }
    });
</script>

</html>