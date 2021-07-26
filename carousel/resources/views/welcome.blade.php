<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>

    <div id="app">
        <carousel :autoplay="true">
            <img src="https://placeimg.com/640/480/any?">
            <img src="https://placeimg.com/640/480/any?2">
            <img src="https://placeimg.com/640/480/any?3">
            <img src="https://placeimg.com/640/480/any?4">
            <img src="https://placeimg.com/640/480/any?5">
        </carousel>

        <h2>Another one</h2>

        <div style="width: 300px; height: 150px">
            <carousel>
                <img style="height: 150px" src="https://placeimg.com/640/480/any?">
                <img style="height: 150px" src="https://placeimg.com/640/480/any?2">
                <img style="height: 150px" src="https://placeimg.com/640/480/any?3">
                <img style="height: 150px" src="https://placeimg.com/640/480/any?4">
                <img style="height: 150px" src="https://placeimg.com/640/480/any?5">
            </carousel>
        </div>
    </div>

    <script src="/js/app.js"></script>

</body>

</html>
