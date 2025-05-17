<!-- resources/views/emails/generic.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] ?? 'Email from ' . config('app.name') }}</title>
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
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
@if(isset($data['header']))
    <div class="header">
        <h1>{{ $data['header'] }}</h1>
    </div>
@endif

<div class="content">
    @if(isset($data['greeting']))
        <p>{{ $data['greeting'] }} {{ $data['recipient_name'] ?? 'User' }},</p>
    @endif

    {!! $data['content'] ?? '' !!}

    @if(isset($data['action_text']) && isset($data['action_url']))
        <p style="text-align: center; margin: 30px 0;">
            <a href="{{ $data['action_url'] }}"
               style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                {{ $data['action_text'] }}
            </a>
        </p>
    @endif

    @if(isset($data['closing']))
        <p>{{ $data['closing'] }}</p>
    @endif
</div>

<div class="footer">
    <p>This email was sent from {{ config('app.name') }}</p>
    @if(isset($data['unsubscribe_url']))
        <p><a href="{{ $data['unsubscribe_url'] }}">Unsubscribe</a></p>
    @endif
</div>
</body>
</html>
