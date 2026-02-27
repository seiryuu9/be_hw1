
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <!DOCTYPE html>
    <html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulár</title>
    </head>
    <body>

    <form method="POST" action="/example/result">
        @csrf
        <p>
            <label>Zadaj cislo:</label><br>
            <input type="number" name="cislo">
        </p>

        <button type="submit">Odoslať</button>
    </form>

    </body>
    </html>

