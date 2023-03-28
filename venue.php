<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Lecture Venue Booking System</title>
    <link rel="stylesheet" href="venue.css">
</head>
<body>

	<h1>University Lecture Venue Booking System</h1>

	<h2>Book a Venue</h2>
	<form method="post" action="booking.php">
		<label for="venue">Venue:</label>
		<select id="venue" name="venue">
			<option value="venue1">Venue 1</option>
			<option value="venue2">Venue 2</option>
			<option value="venue3">Venue 3</option>
		</select><br><br>
		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required><br><br>
		<label for="time">Time:</label>
		<input type="time" id="time" name="time" required><br><br>
		<input class="book" type="submit" value="Book Venue">
	</form>

	<h2>Cancel Booking</h2>
	<form method="post" action="cancellation.php">
		<label for="booking_id">Booking ID:</label>
		<input type="text" id="booking_id" name="booking_id" required><br><br>
		<input class="cancel" type="submit" value="Cancel Booking">
	</form>

</body>
</html>