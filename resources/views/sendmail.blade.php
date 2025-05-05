<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - India Bhavan</title>

</head>
<body style="font-family: Arial, sans-serif;
    background-color: #edeadf;
    display: flex;
    width: 700px;
    padding: 40px;
    justify-content: center;
    margin: auto;">
    <div class="container" style="max-width: 700px;
    margin: 20px auto;
    background: radial-gradient(circle, rgb(86 57 31 / 1%) 0%, rgb(121 121 121 / 30%) 100%), url('https://indiabhavan.ie/images/bhavan/email.jpg');
    background-size: cover;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        
        <div class="header" style="text-align: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;display: flex;
    justify-content: center !important;">
            
            <center><img src="https://indiabhavan.ie/images/bhavan/India-logo.png" alt="India Bhavan Logo" style="max-width: 130px;height: 100%;display: flex;justify-content: center !important;pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;"></center>
        </div>
        <div class="content" style=" line-height: 1.6;">
            <h1 style="color: #000; text-align: center;">Booking Confirmation</h1>
            <p style="color: #000;text-align: center;">Dear India Bhavan,</p>
            <p style="color: #000; text-align: center;">Thank you for booking a table at <strong>India Bhavan</strong>. We are delighted to confirm your reservation.</p>
            <p style="color: #000;text-align: center;"><strong>Booking Details:</strong></p>
            <ul style="padding: 0px 58px;">
                <li style="display: block ;"><strong>Name:</strong> {{ $booking->name }}</li>
                <li style="display: block ;"><strong>Email:</strong> {{ $booking->email }}</li>
                <li style="display: block ;"><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->date)->format('d-m-Y') }}</li>
                <li style="display: block ;"><strong>Time:</strong> {{ \Carbon\Carbon::parse($booking->time)->format('h:i A') }}</li>
                <li style="display: block ;"><strong>Number of Guests:</strong>{{ $booking->guests }}</li>
                <li style="display: block ;"><strong>Message:</strong>{{ $booking->message }}</li>
                <li style="display: block ;"><strong>Location:</strong> Unit 16 Belgard Square W, Tallaght, Dublin, D24 F9XV</li>
            </ul>
            <p style="color: #000;text-align: center;">If you have any questions or need to make changes to your booking, please contact us at 01 538 4868 / 01 557 2604.</p>
            <p style="color: #000;text-align: center;">We look forward to welcoming you to India Bhavan.</p>
            <p style="color: #000;text-align: center;">Best regards,</p>
            <p style="color: #000;text-align: center;">The India Bhavan Team</p>
        </div>
        <div class="footer" style="text-align: center;
        border-top: 1px solid #ddd;
        padding-top: 10px;
        margin-top: 20px;">
            <p style="color: #000;
            font-size: 0.9em;"><a href="https://indiabhavan.ie/" style="text-decoration: none;color: #ff4a4a;">India Bhavan</a> | Phone: 01 538 4868 / 01 557 2604 </p>
        </div>
    </div>
</body>
</html>


