<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make Payment</title>
</head>
<body>
    @if (session()->has('error')){{(session()->get('error'))}}

    @endif
        <h1> start Project</h1>

        <form action="{{route('pay')}}" method="post">@csrf
            <input type="text" name="email" placeholder="Email Address" required> <br> <br>
            <input type="number" name="amount" placeholder="Enter Amount" required> <br> <br>
            <button type="submit"> Submit</button>

        </form>
</body>
</html>

