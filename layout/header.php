<?php $baseUrl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <main>
        <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item"><a href="<?= $baseUrl ?>guru" class="nav-link" aria-current="page">Guru</a></li>
                <li class="nav-item"><a href="<?= $baseUrl ?>siswa" class="nav-link">Siswa</a></li>
                <li class="nav-item"><a href="<?= $baseUrl ?>kelas" class="nav-link">Kelas</a></li>
            </ul>
        </header>
    </main>
</body>

</html>