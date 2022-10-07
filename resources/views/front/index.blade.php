<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/front/styles/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="front/styles/style.css">
    <title>وب سایت شخصی محمد حسین مسجدی</title>
</head>

<body>

    @include ('front.nav')
    @include ('front.home')
    @include ('front.skill')
    @include ('front.blogs')
    @include ('front.footer')

    <script src="front/js/bootstrap.bundle.min.js"> </script>
</body>

</html>