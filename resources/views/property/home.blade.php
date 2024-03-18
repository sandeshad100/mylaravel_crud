<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Property Home - SajiloKotha</h1>
    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('property.create') }}"><button class="btn btn-success">Add Property</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Contact</th>
                <th scope="col">Rate</th>
                <th scope="col">City</th>
                <th scope="col">Detail Address</th>
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <th scope="row">{{ $property->id }}</th>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->contact }}</td>
                    <td>{{ $property->rate }}</td>
                    <td>{{ $property->city }}</td>
                    <td>{{ $property->detail_address }}</td>
                    <td><a href="{{ route('property.edit', ['property' => $property]) }}">Edit</a></td>
                    <td>
                        <form method="post" action="{{ route('property.destroy', ['property' => $property]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
