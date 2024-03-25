    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hermogino - Products</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/productStyle.css')}}">
    </head>
    <style>
        /* Custom CSS styles */
        .search-bar {
            max-width: 1005; /* Adjust the width as needed */
        }

        .search-button {
            min-width: 50px; /* Adjust the width as needed */
        border-top-left-radius: 0 !important; /* Adjust the border-radius as needed */
        border-bottom-left-radius: 0 !important; /* Adjust the border-radius as needed */
        border-top-right-radius: 20px !important; /* Make the right corners not rounded */
        border-bottom-right-radius: 20px !important; /* Make the right corners not rounded */
        }

        .search-bar input[type="text"] {
        border: black solid 1px;
        border-top-left-radius: 20px !important; /* Adjust the border-radius as needed */
        border-bottom-left-radius: 20px !important; /* Adjust the border-radius as needed */
        border-top-right-radius: 0 !important; /* Make the right corners not rounded */
        border-bottom-right-radius: 0 !important; /* Make the right corners not rounded */
        }
 
        
        
    </style>
    <body>
        @include('templates.navbar')
            <div>
                @yield('content')
            </div>


            @if(session('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif
            

            


            
    <div class="container mt-4">
            <div class="d-flex justify-content-end">
                <form class="search-bar me-2" action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control rounded-end px-4" type="text" placeholder="Search" aria-label="Search" name="query">
                        <button class="btn btn-outline-secondary search-button" type="submit">
                            <img src="{{ asset('img/searchIcon.svg') }}" alt="Search Icon" width="20" height="20">
                        </button>
                    </div>
                </form>
            </div>

        <div class="row mb-3">
            <div class="col">
                <h1>Shop iPhone & Android</h1>
            </div>
        </div>

        <div class="row mb-5">
        <h3>New Arrival</h3>
            <div class="col-6">
                
                <video class="looped-video mb-3" autoplay loop muted height="260">
                    <source src="{{ asset('videos/iphonevideo.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-6">
                <video class="looped-video" autoplay loop muted width="700" height="260">
                    <source src="{{ asset('videos/samsungvideo.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <h3 class="mb-4"> <span class="text-dark ">All models.</span> <span class="text-secondary">Take your pick.</span> </h3>

        <div class="row">

        @if(isset($no_results))
            <div class="alert alert-warning" role="alert">
                {{ $no_results }}
            </div>
        @endif
            
            @foreach($records as $phonedet)
                <div class="col-md-3 col-small-1 mb-5">
                    
                    <div class="product-card px-4 ">
                            <div class="row mt-5 ">
                                <div class="col-12 ">
                                    <h3 class="product-title text-center">{{ $phonedet->phone_name }}</h3>
                                </div>
                            </div>

                            <div class="product-img ">
                                <img src="{{ asset('/img/'.$phonedet->image) }}" alt="Product Image" data-bs-toggle="modal" data-bs-target="#productModal{{ $phonedet->id }}">
                            </div>

                            <div class="product-info mb-0 ">
                                <div class="row ">
                                <div class="col-6 ">
                                        <?php
                                            $formatted_price = number_format((float)$phonedet->price);
                                        ?>
                                        <p class="product-price mb-0">₱ {{ $formatted_price }}</p> 
                                        <span class="product-description ">{{ $phonedet->storage }}</span>
                                    </div>

                                        <div class="col-6  mb-0">
                                            <div class="text-end"> 
                                                <button class="btn rounded-pill mt-2" style=" color: white;background-color: #0071e3;font-size: 0.8rem; width: 65%;" data-bs-toggle="modal" data-bs-target="#productModal{{ $phonedet->id }}">View</button> <!-- Added btn-sm class for smaller button -->
                                            </div>
                                        </div>
                                </div>

                        </div>
                    </div>
                        @include('templates.phoneModal')
                        <div>
                            @yield('content')
                        </div>
                </div>
            @endforeach 
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
