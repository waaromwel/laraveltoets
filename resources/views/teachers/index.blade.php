<!DOCTYPE html>
<html>
<head><title>Docenten</title></head>
<body>
<h1>Overzicht van Docenten</h1>
<ul>
    @foreach($teachers as $teacher)
        <li>
            <strong>{{ $teacher->name }}</strong><br>
            Invoeren op: {{ $teacher->invoeren_op }}<br>
            Hobby's: {{ $teacher->hobbies ?? 'Geen' }}<br>
            Geeft vakken:
            <ul>
                @foreach($teacher->subjects as $subject)
                    <li>{{ $subject->name }}</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
</body>
</html>

