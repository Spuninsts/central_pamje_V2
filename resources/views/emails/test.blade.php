<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['subject'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>{{ $data['subject'] }}</h1>
</div>
<div class="content">
    <p>{{ $data['message'] }}</p>
    <hr>
    <p><small>This email was sent from {{ config('app.name') }}</small></p>
</div>
</body>
</html>
