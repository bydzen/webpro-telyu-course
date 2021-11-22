<?php

$nim = $_POST['nim'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$kuis = $_POST['kuis'];
$tubes = $_POST['tubes'];

// [HERE] Kerjakan bagian ini
// Hitung total nilai
$uts = $uts * 0.25;
$uas = $uas * 0.25;
$kuis = $kuis * 0.15;
$tubes = $tubes * 0.35;

$total = $uts + $uas + $kuis + $tubes;

// Buatlah fungsi yang mengembalikan nilai menjadi indeks
function indeks($nilai)
{
    if ($nilai > 80) {
        return "A";
    } elseif ($nilai > 70) {
        return "AB";
    } elseif ($nilai > 60) {
        return "B";
    } elseif ($nilai > 50) {
        return "C";
    } elseif ($nilai > 40) {
        return "D";
    } else {
        return "E";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center" style="margin:50px;">REKAP NILAI - <?php echo $nim ?></h1> <!-- Echo NIM -->
    <div class="container d-flex justify-content-sm-center align-items-center">

        <table class="table table-bordered">
            <tr>
                <th>UTS</th>
                <th>UAS</th>
                <th>Kuis</th>
                <th>Tubes</th>
                <th>Total Nilai</th>
                <th>Index</th>
            <tr>
                <!-- [HERE] Kerjakan bagian ini -->
                <td><?php echo $uts ?></td> <!-- Echo UTS -->
                <td><?php echo $uas ?></td> <!-- Echo UAS -->
                <td><?php echo $kuis ?></td> <!-- Echo Kuis -->
                <td><?php echo $tubes ?></td> <!-- Echo Tubes -->
                <td><?php echo $total ?></td> <!-- Echo Total nilai -->
                <td><?php echo indeks($total) ?></td> <!-- Echo Indeks nilai -->
            </tr>
        </table>
    </div>
</body>

</html>