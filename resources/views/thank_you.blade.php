@extends('home')
@section('section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;

        }
        h1 {
            color: #333;
            margin-top: 50px;
            padding-top: 100px;
        }
        p {
            color: #666;
            margin-bottom: 50px;

        }
        .back-button {
            display: inline-block;
            background: linear-gradient(to top, #77c2ff, #ffa6b1);
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition-duration: 0.4s;
            margin-bottom: 100px;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
  
    <h1>Thank You for Donating!</h1>
    <p>Your donation has been received. We appreciate your generosity.</p>
    <a href="{{ url('homepage') }}" class="back-button">Go Back to Homepage</a>
</body>
</html>
@endsection
