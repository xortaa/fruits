<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <h1>Create</h1>
        <div>
          @if ($errors -> any())
            <ul>
              @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </div>
        <form method="POST" action="{{ route('fruits.store') }}">
            @csrf
            <div class="form-control">
                <label for="">Name</label>
                <input type="text" name="name" />
            </div>
            <div class="form-control">
                <label for="">Color</label>
                <input type="text" name="color" />
            </div>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
