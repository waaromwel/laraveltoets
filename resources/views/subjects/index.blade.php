<!DOCTYPE html>
<html>
<head><title>Vakken</title></head>
<body>
<h1>Overzicht van Vakken</h1>
<ul>
    @foreach($subjects as $subject)
        <li>
            <strong>{{ $subject->name }}</strong><br>
            Beschrijving: {{ $subject->description }}<br>
            Gegeven door: {{ $subject->teacher->name }}
        </li>
    @endforeach
</ul>
</body>
</html>