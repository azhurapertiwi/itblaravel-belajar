<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>ini halaman dosen</h1>
    @foreach ($data as $dosen)
        <p>{{ $dosen['nama'] }}</p>
        <p>{{ $dosen['alamat'] }}</p>
        <p>{{ $dosen['hp'] }}</p>
    @endforeach

</body>

</html>
