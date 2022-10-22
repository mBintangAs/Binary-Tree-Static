<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Binary tree demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body >
    <div class="container-fluid">

        <form action="input.php" method="post">

            <div class="row mt-5">
                <div class="col-md-5 ms-auto">
                    <div class="card shadow">
                        <div class="row mt-5">
                            <div class="text-center">
                                <h1>Masukkan Jumlah Btree :</h1>
                            </div>
                        </div>
                        <div class="row mt-5 mb-5">
                            <div class="text-center">
                                <input type="number" required min="0" class="form-control-md" name="jumlah" id="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 me-auto">
                    <div class="card shadow">
                        <div class="row mt-5">
                            <div class="text-center">
                                <h1>Masukkan Jumlah Level :</h1>
                            </div>
                        </div>
                        <div class="row mt-5 mb-5">
                            <div class="text-center">
                                <input type="number" required min="0" class="form-control-md" name="level" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>