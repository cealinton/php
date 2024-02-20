<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 2</title>
</head>
<body>
    <header>
        <img src="./image/poly_logo.png" alt="logo" width="30px" height="30px">
        <h1 class="title">Домашнаяя работа "Feedback form"</h1>
    </header>
    <main>
        <form action="https://httpbin.org/post" method="post">
            <div class="mb-3">
                <label for="name">Enter your name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="surname">Enter your surname</label>
                <input type="text" name="surname" id="surname">
            </div>
            <div class="mb-3">
                <label for="email">Enter your email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="mb-3">
                <textarea name="text" id="text" cols="30" rows="10">desc</textarea>
            </div>
            <button type="submit">Send</button>
        </form>
        <a href="./back.php">Get to headers</a>
    </main>
    <footer>
        <h2 class="subtitle">Задание для самостоятельной работы.<br>Тарантина Дарина</h2>
    </footer>
</body>
</html>