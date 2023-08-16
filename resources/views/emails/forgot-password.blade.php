<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
</head>

<body>
    <h2>Reset Password</h2>
    <p>Klik tautan di bawah ini untuk mereset password Anda:</p>
    <a href="{{ route('reset.password', ['token' => $token]) }}">Reset Password</a>
</body>

</html>
