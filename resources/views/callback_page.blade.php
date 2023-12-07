<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Call Back</title>
</head>
<body>
    <h1>call back</h1>
    <table>
        <tbody>
            <tr><td>Status: </td> <td>{{$data->status}}</td></tr>
            <tr><td>Reference: </td> <td>{{$data->reference}}</td></tr>
            <tr><td>Amount: </td> <td>{{$data->amount}}</td></tr>
            <tr><td>Fees: </td> <td>{{$data->fees}}</td></tr>
            <tr><td>Email: </td> <td>{{$data->customer->email}}</td></tr>
        </tbody>
    </table>
</body>
</html>

