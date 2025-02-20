<!DOCTYPE html>
<html>

<head>
    <title>New Package Order</title>
</head>

<body>
    <h2>New Package Request</h2>

    <p><strong>User Name:</strong> {{ $user_name }}</p>
    <p><strong>User Email:</strong> {{ $user_email }}</p>
    <p><strong>Selected Plan:</strong> {{ $selected_plan }}</p>

    <h3>Package Features:</h3>
    <ul>
        @foreach ($plan_features as $feature)
        <li>{{ $feature }}</li>
        @endforeach
    </ul>
</body>

</html>