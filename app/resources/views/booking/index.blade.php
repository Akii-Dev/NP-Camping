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
    @foreach ($spots as $spot)
        @if ($spot->booked == 1)
            <div class="bg-yellow-500 w-32">
        @elseif ($spot->booked == 0)
            <div class="bg-green-500 w-28"> {{-- Different width to show difference --}}
                <button onclick="selectSpot({{ $spot->id }})">Click me</button>

        @endif

            <h2>Spot {{ $spot->id }}</h2>
            {{-- <h2>Is it booked? {{ $spot->booked }}</h2> --}}
        </div>
    @endforeach

    <div id="popup" class="hidden">
        <p id="spot-name"></p>
        <p id="description"></p>
    </div>
    {{-- move to other file soontm --}}
    <script>
        function selectSpot(id) {
            alert("You selected a spot!");
            // Show popup with spot details
            const popup = document.getElementById('popup');
            popup.classList.remove('hidden');
            document.getElementById('spot-name').innerText = id;
        }
    </script>
</body>
</html>