<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusher Test</title>


</head>

<body>
    <form method="POST" action="{{route("submit")}}">
        @csrf
        <label for="message">Send Message</label>
        <input type="text" id="message" name="message">
        <button type="submit">Send</button>
    </form>
</body>

</html>