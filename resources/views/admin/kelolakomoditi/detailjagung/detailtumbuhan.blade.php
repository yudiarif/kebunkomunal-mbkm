<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto Jagung</title>
    <!-- Bootstrap CSS -->
    <style>
        .thumbnail-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .thumbnail {
            cursor: pointer;
            margin: 0 5px;
        }

        .thumbnail img {
            border-radius: 5px;
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Tanaman Jagung</h6>

                    <!-- Bootstrap JS and dependencies -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                    @if ($fotojagung)
                        <div id="jagungCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $fotojagung->foto1) }}" class="d-block w-100"
                                        style="border-radius: 15px;" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $fotojagung->foto2) }}" class="d-block w-100"
                                        style="border-radius: 15px;" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $fotojagung->foto3) }}" class="d-block w-100"
                                        style="border-radius: 15px;" alt="">

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#jagungCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#jagungCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div class="thumbnail-container">
                            <div class="thumbnail" data-target="#jagungCarousel" data-slide-to="0">
                                <img src="{{ asset('storage/' . $fotojagung->foto1) }}" alt="">
                            </div>
                            <div class="thumbnail" data-target="#jagungCarousel" data-slide-to="1">
                                <img src="{{ asset('storage/' . $fotojagung->foto2) }}" alt="">
                            </div>
                            <div class="thumbnail" data-target="#jagungCarousel" data-slide-to="2">
                                <img src="{{ asset('storage/' . $fotojagung->foto3) }}" alt="">
                            </div>
                        </div>
                    @else
                        <h4>Belum Ada Foto</h4>
                    @endif

                </div>
            </div>
</body>

</html>
