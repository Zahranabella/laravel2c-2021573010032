<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        {{-- <li>Fahrul Sadikin</li>
        <li>Khairul Khazil</li>
        <li>Anisa Salwa</li>
        <li>Sepkha Wulan Dari</li> --}}

        {{-- <li><?php echo $mahasiswa01;?></li> --}}

        {{-- <li><?php echo $mahasiswa01; ?></li>
        <li><?php echo $mahasiswa02; ?></li>
        <li><?php echo $mahasiswa03 ?></li>
        <li><?php echo $mahasiswa04; ?></li> --}}

        {{-- <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li> --}}

        {{-- cara lebih singkat :
        <?php 
        foreach ($mahasiswa as $nama) {
            echo "<li>$nama</li>"
        }
        ?> --}}
    </ol>
<div> Copyright & copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika - PNL </div>
</body>
</html>