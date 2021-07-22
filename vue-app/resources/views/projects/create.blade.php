<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>

    <style>
        body {
            padding: 50px;
        }

    </style>
</head>

<body>
    <div id="app" class="container">
        {{-- <input type="text" v-model="coupon"> --}}
        {{-- Is equals to --}}
        {{-- <input type="text" :value="coupon" @input="coupon = $event.target.value"> --}}

        <coupon v-model="coupon"></coupon>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
