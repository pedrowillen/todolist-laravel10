<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>{{ $page ?? '' }}</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">

        </div>
        <div class="content">
            <nav>
                <a href="{{ $href ?? '/' }}" class="btn btn-primary">
                    {{$btn ?? ''}}
                </a>
            </nav>
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
