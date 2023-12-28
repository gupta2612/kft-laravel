<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Confirmation</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">

        <h2 style="color: #333;">Registration Confirmation</h2>

        <p>Dear {{ Str::ucfirst($content['name']) }},</p>

        <p>Congratulations! Your registration for <strong>KFT Team</strong> has been successfully confirmed. We're excited to have you on board.</p>

        <p>To access your account, please use the following login link: <a href="[Login Link]">Login Now</a></p>

        <p>Your login credentials are as follows:</p>
        <ul>
            <li><strong>Email:</strong> {{ $content['username'] }}</li>
            <li><strong>Password:</strong> {{ $content['password'] }}</li>
        </ul>

        <p>Please make sure to keep your login information secure. If you have any questions or encounter any issues, feel free to reach out to us at <a href="mailto:sbdeveloper2612@gmail.com">sbdeveloper2612@gmail.com</a> or call us at 96XXXXXXXXX.</p>

        <p>We look forward to your active participation and hope you have a wonderful experience with <strong>KFT Team</strong>. Thank you for choosing us.</p>

        <p>Best regards,<br>
        The KFT Team<br>
        96XXXXXXXXX</p>

    </div>
</body>
</html>