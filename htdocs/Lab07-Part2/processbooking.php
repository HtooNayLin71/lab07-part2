<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header><h1>Rohirrim Tour Booking Confirmation</h1></header>
<main>
<article>
<?php
// Missing fields (including unchecked checkboxes) have a readable default.
// Escape submitted text before echoing it into HTML.
function bookingValue($name, $default = 'Not provided') {
    if (isset($_POST[$name]) && is_string($_POST[$name])) {
        return htmlspecialchars($_POST[$name], ENT_QUOTES, 'UTF-8');
    }
    return $default;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<h2>Your details</h2>';
    echo '<p>First name: ' . bookingValue('firstname') . '</p>';
    echo '<p>Last name: ' . bookingValue('lastname') . '</p>';
    echo '<p>Age: ' . bookingValue('age') . '</p>';
    echo '<p>Species: ' . bookingValue('species') . '</p>';
    echo '<h2>Your trip</h2>';
    echo '<p>Accommodation: ' . bookingValue('accom', 'Not selected') . '</p>';
    echo '<p>4 Day Tour: ' . bookingValue('4day', 'Not selected') . '</p>';
    echo '<p>10 Day Tour: ' . bookingValue('10day', 'Not selected') . '</p>';
    echo '<p>Menu preferences: ' . bookingValue('food') . '</p>';
    echo '<p>Date: ' . bookingValue('bookday') . '</p>';
    echo '<p>Number of travellers: ' . bookingValue('partysize') . '</p>';
} else {
    echo '<p>Please submit the booking form to view your confirmation.</p>';
}
?>
<p><a href="register.html">Return to booking form</a></p>
</article>
</main>
</body>
</html>
