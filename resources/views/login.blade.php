<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('/img/fav.png') }}">
    <title>Ngide-Net</title>
    <link rel="stylesheet" href="/assets/dist/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-7xN6EAgOvWlXDsW7XehwJk0IJmFqXknm0aW1c1Hva/J0u1DZFNXMl9PlKAh7FZzR8ROk5cvWrrbIyIeODlj9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
<form action="ngide" method="POST">
    <label for="username">username  : </label>
    <input type="text" id="username" name="username">
    <br>
    <label for="pass">password  :</label>
    <input type="password" id="pass" name="password">
    <br>
    <button><input type="submit"></button>
</form>

 
    <script src="assets/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
