<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermogino - Edit a phone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #fff; 
        }
    </style>
</head>
<body>

    @include('templates.navbar')

    <div class="container mt-5">
        <div>
            @yield('content')
        </div>
        <div class="registration-form">
            <form action="/edit_process" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $phone->id }}">
                <div class="mb-3">
                    <label for="phoneName" class="form-label">Phone Name:</label>
                    <input type="text" name="phoneName" class="form-control" id="phoneName" placeholder="Phone Name" value="{{ $phone->phone_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{ $phone->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color:</label>
                    <input type="text" name="color" class="form-control" id="color" placeholder="Color" value="{{ $phone->color }}" required>
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Size:</label>
                    <input type="text" name="size" class="form-control" id="size" placeholder="Size" value="{{ $phone->size }}" required>
                </div>
                <div class="mb-3">
                    <label for="processor" class="form-label">Processor:</label>
                    <input type="text" name="processor" class="form-control" id="processor" placeholder="Processor" value="{{ $phone->processor }}" required>
                </div>
                <div class="mb-3">
                    <label for="ram" class="form-label">RAM:</label>
                    <select id="ram" name="ram" class="form-select" required>
                        <option selected>{{ $phone->ram }}</option>
                        <option>2GB</option>
                        <option>3GB</option>
                        <option>4GB</option>
                        <option>6GB</option>
                        <option>8GB</option>
                        <option>12GB</option>
                        <option>16GB</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="storage" class="form-label">Storage:</label>
                    <select id="storage" name="storage" class="form-select" required>
                        <option selected>{{ $phone->storage }}</option>
                        <option>16GB</option>
                        <option>32GB</option>
                        <option>64GB</option>
                        <option>128GB</option>
                        <option>256GB</option>
                        <option>512GB</option>
                        <option>1TB</option>
                        <option>2TB</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="camera" class="form-label">Camera:</label>
                    <input type="text" name="camera" class="form-control" id="camera" placeholder="Camera" value="{{ $phone->camera }}" required>
                </div>
                <div class="mb-3">
                    <label for="display" class="form-label">Display:</label>
                    <input type="text" name="display" class="form-control" id="display" placeholder="Display" value="{{ $phone->display }}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" name="image" class="form-control" id="image" accept=".gif,.jpg,.jpeg,.png,.svg," required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if(Session::has('success_message'))
            toastr.success("{{ Session::get('success_message') }}")
        @endif
    </script>
</body>
</html>