<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

        <header class="row">
            <h2>BoolNews</h2>

            <nav>
                <ul>
                    @foreach ($categoryList as $category)
                    <li><a href="">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
                <div>
                    <!-- Magnifying lens icon -->
                    <input type="text" placeholder="Search...">
                </div>
            </nav>

        </header>
    </div>

    @yield('content')

    <footer>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Authors</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Support/FAQ</a></li>
        </ul>

        <!-- <img src="https://t4.ftcdn.net/jpg/03/55/83/85/360_F_355838565_1QOwNcZ5j8CW6wLQ1VLTxptidGcSMSQE.jpg" alt="BoolNews Logo"> -->

    </footer>

    </div>
</body>
</html>