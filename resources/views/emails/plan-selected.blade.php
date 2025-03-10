<!DOCTYPE html>
<html>

<head>
    <title>New Package Request</title>
</head>

<body>
    <h2>New Package Selected</h2>

    <p><strong>User Name:</strong> {{ $user_name }}</p>
    <p><strong>User Email:</strong> {{ $user_email }}</p>
    <p><strong>Selected Plan:</strong> {{ $selected_plan }}</p>

    <h3>Ordered Products</h3>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total Price(SAR)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>${{ number_format($product['price'] * $product['quantity'], 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>