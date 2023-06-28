<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link href="styles/style.css" rel="stylesheet">
</head>

<body>
    <section class="container">
        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about/history">History</a></li>
        </ul>
        <h1>Hello from {{ $name }} (welcome page)</h1>
    </section>

</body>

</html>