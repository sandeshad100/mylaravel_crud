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
    <h1>Create Form</h1>
    <div class="container">
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form class="row g-3" method="POST" action="{{ route('property.store') }}">
            @csrf
            @method('post');
            <div class="col-md-6">
                <label for="inputTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputTitle" name="title">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Owner Contact</label>
                <input type="number" class="form-control" id="inputPassword4" name="contact">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Monthly Rate</label>
                <input type="number" class="form-control" id="inputPassword4" name="rate">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">City</label>
                <input type="text" class="form-control" id="inputAddress" name="city" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Detail Address</label>
                <input type="text" class="form-control" id="inputAddress2" name="detail_address"
                    placeholder="Apartment, studio, or floor">
            </div>



            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">ADD</button>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
