<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <h1>fruits</h1>
        <!-- show all the fruits in a table -->
        <div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Color</th>
                </tr>
                @foreach ($fruits as $fruit)
                <tr>
                    <td>{{ $fruit->id }}</td>
                    <td>{{ $fruit->name }}</td>
                    <td>{{ $fruit->color }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
