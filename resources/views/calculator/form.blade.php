<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator form page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="bg-info-subtle">
    <section class=" container bg-light-subtle p-5 mx-auto my-5">
        <h1>Calcualtor Form

            <span class="float-right"><a href="/calculator/logs">Logs</a></span>

        </h1>
        <form action="/calculator/result" method="get">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter A</label>
                <input type="text" class="form-control" name="a" id="formGroupExampleInput" placeholder="Enter one interger value for a">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter B</label>
                <input type="text" class="form-control" name="b" id="formGroupExampleInput2" placeholder="Enter one interger for b">
            </div>

            <div class="mb-3">
                <label for="inputState" class="form-label">Operation</label>
                <select id="inputState" name="opr" class="form-select">
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-success">Success</button>

            </div>

        </form>
    </section>
</body>

</html>