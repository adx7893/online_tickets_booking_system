<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Ticket</title>
</head>
<body>
    <h1>Book Ticket for {{ $ticket->event->name }}</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
        <input type="hidden" name="user_id" value="1"> <!-- Assuming logged-in user ID is 1 -->
        <button type="submit">Book Now</button>
    </form>
</body>
</html>
