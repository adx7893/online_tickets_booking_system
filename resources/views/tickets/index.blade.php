<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tickets</title>
</head>
<body>
    <h1>Available Tickets</h1>
    <ul>
        @foreach ($tickets as $ticket)
            <li>{{ $ticket->ticket_code }} - {{ $ticket->status }}</li>
        @endforeach
    </ul>
</body>
</html>
