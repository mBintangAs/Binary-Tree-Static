<?php
$jumlahBtree = $_POST['jumlah'];
$level = $_POST['level'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>input btree</title>
</head>

<body>
    <div class="container-fluid">
        <form action="display.php" method="post">
            <input type="hidden" name="level" value="<?= $level ?>">
            <input type="hidden" name="jumlah" value="<?= $jumlahBtree ?>">
            <div class="row mt-5">
                <div class="text-center">
                    <?php
            for ($no = 1; $no <= $jumlahBtree; $no++) { ?>
                
                <div class="row mt-3">
                    <div class="col-sm-2 ms-auto">
                        <h2>Data <?= $no ?> :</h2>
                    </div>
                    
                    <div class="col-md-4 me-auto">
                        <input required min="1" type="number" class="form-control " placeholder="Masukkan Angka" name="data<?= $no ?>" id="">
                    </div>
                </div>
                <?php } ?>
                
                </div>
            </div>
                
            <div class="row mt-5">
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
            </div>
                
        </div>

           
                
</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>