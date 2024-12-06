<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events</title>
</head>
<body>
    <h1>Upcoming Events</h1>
    <ul>
        @foreach ($events as $event)
            <li><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></li>
        @endforeach
    </ul>
</body>
</html>
