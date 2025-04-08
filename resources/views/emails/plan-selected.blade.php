<!DOCTYPE html>
<html>

<head>
    <title>New Package Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        h2 {
            color: #007bff;
            text-align: center;
        }

        p {
            font-size: 16px;
            margin: 8px 0;
        }

        .details {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .details p {
            margin: 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: var(--color-primary);
            color: white;
        }

        td {
            background-color: #fff;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <h2>New Package Request</h2>

        <div class="details">
            <p><strong>User Name:</strong> {{ $user_name }}</p>
            <p><strong>User Email:</strong> {{ $user_email }}</p>
            <p><strong>Selected Package:</strong> {{ $selected_plan }}</p>
            <p><strong>Total Package Price:</strong> {{ number_format($plan_price, 2) }} SAR</p>
            <p><strong>Order Date:</strong> {{ $date }}</p>
        </div>

        <h3>📦 Package Details</h3>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>Thank you for choosing us!</p>
            <p>If you have any questions, feel free to <a href="mailto:info@pyramakerz.com">contact us</a>.</p>
        </div>
    </div>

</body>

</html>