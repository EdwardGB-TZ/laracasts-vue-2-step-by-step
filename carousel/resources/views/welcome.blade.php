<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <title>Laravel</title>

</head>

<body>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround" : true }'>
        <img src="https://picsum.photos/500">
        <img src="https://picsum.photos/500?2">
        <img src="https://picsum.photos/500?3">
        <img src="https://picsum.photos/500?4">
        <img src="https://picsum.photos/500?5">
    </div>


    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>

</html>
