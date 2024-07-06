<!-- resources/views/adminonly.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Only</title>
</head>
<body>
    <h1>Update Number of Sold Bricks</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/adminonly">
        @csrf
        <div>
            <label for="numberOfSoldBricks">Number of Sold Bricks:</label>
            <input type="text" id="numberOfSoldBricks" name="numberOfSoldBricks" required>
        </div>
        <div>
            <label for="pin">Pin Number:</label>
            <input type="text" id="pin" name="pin" required>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>

    <div>
        <a href="/" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">Go Back to Home</a>
    </div>
</body>
</html>
