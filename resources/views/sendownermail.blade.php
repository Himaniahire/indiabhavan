<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1> Received a New Booking</h1>
    <p>Dear India Bhavan Team,<br><br>

        You have received a new booking. Here are the details:<br><br>

        Name: {{ $booking->name }}<br>
        Email: {{ $booking->email }}<br>
        Date: {{ \Carbon\Carbon::parse($booking->date)->format('d-m-Y') }}<br>
        Time: {{ \Carbon\Carbon::parse($booking->time)->format('h:i A') }}<br>
        Number of Guests:{{ $booking->guests }}<br>
        Location: Unit 16 Belgard Square W, Tallaght, Dublin, D24 F9XV<br><br>

        If there are any questions or changes needed for this booking, please contact the customer directly at {{ $booking->phone }}.<br><br>

        Best regards,<br>
        India Bhavan Team </p>
</body>
</html>
