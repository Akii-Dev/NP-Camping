<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Account | NP-Camping</title>
</head>

<body class="bg-neutral-200">
    <x-navbar></x-navbar>
    <main class="flex flex-col items-center min-h-screen">
        <div class="orange2 mt-12 bg-zinc-100 p-4 md:px-20">
            <h3 class="text-2xl">User Info</h3>
            {{-- <p>User ID {{ $customer->user_id }}</p> --}}
            <p>Customer ID: {{ $customer->id }}</p>
            <p>Email: {{ $customer->user->email }}</p>
            <p>Surname: {{ $customer->surname }}</p>

            <a href="{{ route('customer.edit', $customer->user_id) }}" class="underline decoration-[#deb841] hover:text-[#deb841] text-lg">Info aanpassen</a>
        </div>
        <section class="cyan1 bg-zinc-100 p-4 my-12 text-center">
            @if (!empty($bookings) && count($bookings) > 0)
                <h2>Boekingen</h2>
                @foreach ($bookings as $booking)
                    <p>{{ $booking->number_of_people }} personen. Van {{ $booking->start_date }} tot
                        {{ $booking->end_date }} </p>
                @endforeach
            @else
                <p>Geen boekingen gevonden</p>
                <a href="{{ route('booking.index') }}" class="underline decoration-[#deb841] hover:text-[#deb841] text-lg">Boek nu!</a>
            @endif

            @if (session('success'))
                <div class="bg-green-500">
                    {{ session('success') }}
                </div>
            @endif
        </section>
    </main>
    <x-footer></x-footer>
</body>

</html>
