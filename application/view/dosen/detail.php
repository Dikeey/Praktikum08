<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL DOSEN</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
                <td><?php echo $dosen -> id ?></td>
                <td><?php echo $dosen -> nama ?></td>
                <td><?php echo $dosen -> tmp_lahir ?></td>
                <td><?php echo $dosen -> tgl_lahir ?></td>
                <td><?php echo $dosen -> gender ?></td>
                <td><?php echo $dosen -> nidn ?></td>
                <td><?php echo $dosen -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>