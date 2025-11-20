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
        <p>User id {{ $customer->user_id }}</p>
        <p>Customer id {{ $customer->id }}</p>
        <p>{{ $customer->user->email }}</p>
        <p>{{ $customer->surname }}</p>

        <a href="{{ route('customer.edit', $customer->user_id) }}">Info aanpassen</a>
    </div>
    <div>
        @if (!empty($bookings) && count($bookings) > 0)
            <h2>Boekingen</h2>
            @foreach ($bookings as $booking)
                <p>{{ $booking->number_of_people }} personen. Van {{ $booking->start_date }} tot
                    {{ $booking->end_date }} </p>
            @endforeach
        @else
            <p>Geen boekingen gevonden</p>
            <a href="{{ route('booking.index') }}">Boek nu!</a>
        @endif

        @if (session('success'))
            <div class="bg-green-500">
                {{ session('success') }}
            </div>
        @endif

</body>

</html>
