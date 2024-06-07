<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="container">
        <h2>My Bookings</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Departure</th>
                <th>Destination</th>
                <th>Time Slot</th>
                <th>Class</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->departure }}</td>
                    <td>{{ $booking->destination }}</td>
                    <td>{{ $booking->time_slot }}</td>
                    <td>{{ $booking->class }}</td>
                    <td>{{ $booking->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </x-app-layout>
