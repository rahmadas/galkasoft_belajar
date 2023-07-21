<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('contact.store') }}">
        @csrf
        <label for="Name">Name</label>
        <input type="text" name="name" id="name">
        <label for="Name">Number</label>
        <input type="number" name="number" id="number">
        <label for="Name">Email</label>
        <input type="text" name="email" id="email">
        <label for="birthdaytime">Birthday (date and time):</label>
        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
        <input type="submit" name="submit" >
    </form>
    
</body>
</html>