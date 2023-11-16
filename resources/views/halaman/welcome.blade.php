<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG {{$name}}</h1>
    <h2>Jenis kelamin 
        @if($gender==="1")
            Laki-Laki
        @elseif($gender==="2")
            Perempuan
        @else
            Other
        @endif
    </h2>
    <h3>Terima kasih telah bergabung di sanberbook. Social Media kita bersama!</h3>
</body>
</html>