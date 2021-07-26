<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Tooltips</title>

    <style>
        html,
        body {
            height: 100vh;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tippy-box[data-theme~='black'] {
            background-color: black;
            color: white;
            padding: 5px;
            border-radius: 5px;
        }

    </style>
</head>

<body>
    <div id="app">
        <h3>Option #1</h3>
        <p>
            Hello there,
            <span data-tooltip="I am a tooltip" data-tooltip-placement="left">Hover over me</span>
        </p>

        <h3>Option #2</h3>
        <p>
            Hello there,
            <span v-tooltip:top="'Another way to make a tooltip'" data-tooltip-placement="left">Hover over me
                again</span>
        </p>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
