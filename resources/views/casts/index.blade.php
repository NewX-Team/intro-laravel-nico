<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Cast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">List Data Cast</h1>

    <table class="table table-hover table-dark table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($casts as $cast) { ?>
                <tr>
                    <td scope="row"><?= $cast->id ?></td>
                    <td><?= $cast->nama ?></td>
                    <td><?= $cast->umur ?></td>
                    <td><?= $cast->bio ?></td>
                    <td><a class="btn btn-info text-white" href="/cast/<?= $cast->id ?>">View</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a class="btn btn-primary mt-3" href="/cast/create">Tambah Cast</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
