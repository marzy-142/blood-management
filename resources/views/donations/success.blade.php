<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Successful</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> <!-- Import Montserrat font -->
    <style>
        body {
            background-color: #f4f4f4; /* Consistent light background */
            font-family: 'Montserrat', Arial, sans-serif; /* Using Montserrat font */
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        h1 {
            color: #d9534f; /* Blood donation theme color */
            margin-bottom: 20px;
            font-weight: 700; /* Bold font weight for headings */
        }
        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* White background for the card */
        }
        .btn {
            margin-top: 20px;
        }
        .success-message {
            font-size: 1.2em; /* Slightly larger font for emphasis */
            color: #28a745; /* Bootstrap success color */
            font-weight: 700; /* Bold text */
        }
        .donation-details {
            margin-top: 15px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background-color: #f8f9fa; /* Light gray background for details */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card text-center">
            <h1>Donation Successful</h1>
            <p class="success-message">Your donation has been successfully recorded!</p>
            <div class="donation-details">
                <p><strong>Donor ID:</strong> {{ $donation->donor_id }}</p>
                <p><strong>Recipient ID:</strong> {{ $donation->recipient_id }}</p>
                <p><strong>Donation Date:</strong> {{ $donation->donation_date }}</p>
            </div>
            <a href="{{ route('home') }}" class="btn btn-primary">Go to Homepage</a>
        </div>
    </div>
</body>
</html>
