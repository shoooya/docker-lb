<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
            @foreach ($results as $result)
                <tr>
                    <th>{{ $result->id }}</th>
                    <th>{{ $result->name }}</th>
                    <th>{{ $result->created_at }}</th>
                    <th>{{ $result->updated_at }}</th>
                </tr>
            @endforeach
        </table>
    </body>
</html>
