<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хеширование MD5</title>
</head>

<body>
    <form action="/api/hash" method="POST">
        <input type="text" name="src" , placeholder="Исходное сообщение">
        <button type="submit">Хешировать</button>
    </form>
</body>
<style>
    form {
        display: flex;
    }

    form>input {
        width: 250px;
    }

    form>button {
        margin-left: 5px;
    }
</style>

</html>