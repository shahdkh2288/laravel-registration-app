{{-- header.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield("title")</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
                <img src="{{ asset('WhatsApp Image 2024-04-06 at 22.59.10_aeffbbd7.jpg') }}" alt="Logo" width="100" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#">Services</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
