<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <form x-data="{
            form: $form('post', '/register', {
                name: '',
                email: '',
                password: '',
            }),
        }">
            @csrf
            <label for="name">Name</label>
            <input
                id="name"
                name="name"
                x-model="form.name"
                @input="form.validate('name')"
            />
            <template x-if="form.invalid('name')">
                <div x-text="form.errors.name"></div>
            </template>
         
            <label for="email">Email</label>
            <input
                id="email"
                name="email"
                x-model="form.email"
                @input="form.validate('email')"
            />
            <template x-if="form.invalid('email')">
                <div x-text="form.errors.email"></div>
            </template>
            <input
                id="password"
                name="password"
                x-model="form.password"
                @input="form.validate('password')"
            />
            <template x-if="form.invalid('password')">
                <div x-text="form.errors.password"></div>
            </template>
         
            <button>Create User</button>
        </form>
    </body>
</html>
