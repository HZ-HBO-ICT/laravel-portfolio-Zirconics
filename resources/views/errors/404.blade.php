<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>404 not found</title>
</head>

<body>

<!-- Error message -->
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-10 d-flex justify-content-center">
            <h1 class="error-code">404</h1>
        </div>
            <p class="error-subtext text-center">Oops! it seems you've entered a non-existing place</p>
            <p class="error-subtext text-center">Would you like us to take you <a href="/" class="text-link-hover">home?</a></p>
            <p class="error-subtext text-center">Or maybe to your <a class="text-link-hover" onclick="history.back()">previous location?</a></p>
            <p class="error-subtext text-center">you're also free to explore this void</p>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
@yield('script')
</body>

</html>

