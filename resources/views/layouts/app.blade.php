<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span style="font-size: 24px; font-weight: bold; color: #b30000; text-transform: uppercase; letter-spacing: 1px; display: inline-flex; align-items: center;"
                      onmouseover="this.style.color='#f0a500';"
                      onmouseout="this.style.color='#b30000';">
                    ❤️ BloodLink
                </span>
            </a>
            
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('donors.index') }}">Donors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recipients.index') }}">Recipients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('donations.index') }}">Donations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
