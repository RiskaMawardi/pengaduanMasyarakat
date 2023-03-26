<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Regiser Account</title>
</head>

<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-200">
            <div class="row justify-content-center align-items-center h-200">
                <div class="col-6 mt-5">
                    <div class="header">
                        <h1>Sign Up</h1>
                        <p>Please enter your details.</p>
                    </div>
                    <div class="login-form">
                        <form action="{{route('regAdmin')}}" method="POST">
                            @csrf
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" name="nama_petugas" placeholder="Enter your name">

                            <label for="email" class="form-label">Username</label>
                            <input type="text" class="form-control" id="email" name="username" placeholder="Enter your username">

                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">

                            <label for="no_hp" class="form-label">Phone Number</label>
                            <input type="no_hp" class="form-control" id="no_hp" name="telp" placeholder="Enter your phone number">

                           

                            <a href="#" class="text-decoration-none text-center"></a>
                            <button class="signin" type="submit">Sign Up</button>
                        </form>
                        <div class="text-center">
                            <span class="d-inline">Don’t have an account?<a href=""
                                    class="signup d-inline text-decoration-none"> Sign up for free</a></span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="login-right w-50 h-200">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../../assets/img/image 3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../assets/img/image 4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../assets/img/image 5.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
