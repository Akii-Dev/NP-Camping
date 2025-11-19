<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>
    <div>
        <h1>Customer Details</h1>
        <p>{{ $customer->user_id }}</p>
        <p>{{ $customer->id }}</p>
        <p>{{ $customer->user->email }}</p>
        <p>{{ $customer->surname }}</p>

        <a href="{{ route('customer.edit', $customer->user_id) }}">Edit</a>
    </div>

    @if (session('success'))
        <div class="bg-green-500">
            {{ session('success') }}
        </div>
    @endif

</body>

</html>
