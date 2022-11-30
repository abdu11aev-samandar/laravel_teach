<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Create</title>
</head>
<body>
<h1>Create a New User</h1>
<form action="/user-create" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">submit</button>
</form>
</body>
</html>
