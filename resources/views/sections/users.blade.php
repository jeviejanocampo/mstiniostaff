@extends('admin.dashboard') <!-- Adjust this path if needed -->

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
</head>
<body>
<div class="containerlol">
<h1>Hello, Users!</h1>
<p>This is the Users page.</p>

<!-- Button to trigger the display of the message -->
<button id="saveButton">Save</button>

<!-- Placeholder for the message -->
<div id="message" style="margin-top: 20px; color: green;"></div>
</div>

<script>
    // JavaScript to handle button click
    document.getElementById('saveButton').addEventListener('click', function() {
        // Create a new message element
        const newMessage = document.createElement('div');
        newMessage.innerText = 'Hi';
        
        // Append the new message to the message div
        document.getElementById('message').appendChild(newMessage);
    });
</script>


</body>
</html>
@endsection