<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai - 1303194010</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center" style="margin:50px;">INPUT NILAI</h1>
    <div class="container d-flex justify-content-sm-center align-items-center">
        <form action="show_nim.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control" name="nim" placeholder="NIM">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">UTS</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control" name="uts" placeholder="UTS">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">UAS</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control" name="uas" placeholder="UAS">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kuis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kuis" placeholder="Kuis">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tubes</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tubes" placeholder="Tubes">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-5"></div>
                <button class="col-sm-3 btn btn-primary" type="submit">Input</button>
            </div>
        </form>
    </div>
</body>

</html>