<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Validation</title>
</head>
<body>
    {{ implode('<br>', $errors->all()) }}
    @if(session('success'))
    {{ session('success') }}
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
