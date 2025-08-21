<!DOCTYPE html>
<html>

<head>
    <title>Contact Email</title>
</head>

<body>
    <h1>You have a new message from contact form</h1>
    <p>Name: {{ $mailData['name'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Message: {{ $mailData['message'] }}</p>
    <p>Thanks</p>
</body>

</html>