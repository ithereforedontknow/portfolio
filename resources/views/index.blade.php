<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fontanilla, Jule Ethan E.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css" type="text/css">
</head>

<body>

    <nav class="nav sticky-top justify-content-center bg-body-dark">
        <a class="nav-link active" aria-current="page" href="#home" style="color: wheat">Home</a>
        <a class="nav-link" href="#about" style="color: wheat">About</a>
        <a class="nav-link" href="#contact" style="color: wheat">Contact</a>
    </nav>
    <div class="d-flex justify-content-center align-items-center" id="home" style="height: 100svh;">
        <div class="container d-flex justify-content-center">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-3 fw-bold">Hi,</h1>
                    <h1 class="display-3 fw-bold">I'm {{ $user->firstname }}</h1>
                    <h1 class="display-3 fw-bold">{{ $user->lastname }}</h1>
                    <div class="ms-5 mt-5">
                        <h4 class="fw-bold">{{ $user->birthdate }}</h4>
                        <h4 class="fw-bold">Height, {{ $user->height }} cm</h4>
                        <h4 class="fw-bold">Weight, {{ $user->weight }} kg</h4>
                    </div>
                </div>
                <div class="col">
                    <img class="rounded-circle justify-content-end img" src="./image.jpeg" style="width: 500px; border: white 5px solid">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" id="about" style="height: 100svh;">
        <div>
            <div class="container-sm d-flex justify-content-center">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-center">
                            <h1 class="display-3 fw-bold">About</h1>
                            <h1 class="display-3 fw-bold">me</h1>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <h5 class="">{{$user->about}}</h5>
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="fw-bold text-center">This my cat</h1>
                        <div class="text-center">
                            <img class="rounded-circle justify-content-end" src="./cat.jpg" style="width: 300px; border: white 5px solid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 d-flex justify-content-center">
                <div>
                    <h1 class="display-4 fw-bold">Fun Facts</h1>
                    <div>
                        <div class="rounded-pill p-2" style="background-color: antiquewhite;">
                            <div class="rounded-pill p-4" style="border: 2px solid red;">
                                <div class="text-center">
                                    <h3>I love music</h3>
                                    <h3>I love movies</h3>
                                    <h3>I love you</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" id="contact" style="height: 100svh;">
        <div class="container-sm d-flex justify-content-center align-items-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="text-center">
                        <img class=" justify-content-end" src="./user.svg" style="width: 300px; ">

                    </div>
                </div>
                <div class="col">
                    <div>
                        <h1>I'd love to hear</h1>
                        <h1>from <span class="fw-bold">you.</span></h1>
                        <p>Got a project you would like me to work on? Or how about just a friendly chat?</p>
                        <button class="btn btn-outline-danger rounded-pill"><a class="text-decoration-none" href="mailto:{{$user->email}}">Email</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>