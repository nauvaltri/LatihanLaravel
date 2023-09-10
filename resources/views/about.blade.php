<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    
    
    <!-- Linkkan about.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
</head>
<body>
    <div class="container">
        <div class="bg-white p-4 rounded shadow-md">
            <h4 class="font-bold text-2xl mb-4">About Us</h4>
            <table class="table-auto">
                <tbody>
                    <tr>
                        <td class="pr-4 font-bold">Name:</td>
                        <td>{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-bold">Email:</td>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-bold">Age:</td>
                        <td>{{ $data['umur'] }}</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-bold">Address:</td>
                        <td>{{ $data['alamat'] }}</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-bold">School:</td>
                        <td>{{ $data['sekolah'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

