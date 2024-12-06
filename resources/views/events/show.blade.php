<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $event->name }}</title>
</head>
<body>
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p>Location: {{ $event->location }}</p>
    <p>Date & Time: {{ $event->date_time }}</p>
    <p>Seats Available: {{ $event->available_seats }}</p>
    <a href="{{ route('bookings.create', $event->id) }}">Book a Ticket</a>
</body>
</html>
