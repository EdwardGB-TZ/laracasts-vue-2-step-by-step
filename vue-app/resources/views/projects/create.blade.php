<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <style>
        body {
            padding: 100px;
        }
    </style>
</head>
<body>
    <div id="app" class="container">
        @include('projects.list')

        <form action="/projects" method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="control mb-5">
                <label for="name">Project name:</label>

                <input id="name"
                    name="name" 
                    class="input is-primary" 
                    type="text" 
                    placeholder="Primary input" 
                    v-model="form.name">
                
                <span class="has-text-danger-dark" 
                    v-if="form.errors.has('name')"
                    v-text="form.errors.get('name')">
                </span>
            </div>

            <div class="control mb-5">
                <label for="description">Project description:</label>

                <input id="description" 
                    name="description"
                    class="input is-primary" 
                    type="text" 
                    placeholder="Primary input" 
                    v-model="form.description">

                <span class="has-text-danger-dark"
                    v-if="form.errors.has('description')" 
                    v-text="form.errors.get('description')">
                </span>
            </div>

            <div class="control">
                <button type="submit" :disabled="form.errors.any()">Create</button>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>