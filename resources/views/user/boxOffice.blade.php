<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Office</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .header {
            background-color: #0074D9;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .movie {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 1rem 0;
        }

        .movie img {
            max-width: 100px;
            margin-right: 1rem;
        }

        h2 {
            margin: 0;
            color: #0074D9;
        }

        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Box Office</h1>
    </div>
    <div class="container">
        <div class="movie">
            <img src="{{ asset('assets/img8.jpg') }}" alt="Movie Title 1">
            <div>
                <h2>Source code</h2>
                <p>Release Date: Soon</p>
            </div>
        </div>
        <div class="movie">
            <img src="{{ asset('assets/img11.jpg') }}" alt="Movie Title 2">
            <div>
                <h2>Hollywood</h2>
                <p>Release Date: Soon</p>
            </div>
        </div>
    </div>
</body>

</html>
