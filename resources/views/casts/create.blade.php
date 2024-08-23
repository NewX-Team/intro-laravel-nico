<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Cast Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .custom-textarea {
            padding: 1rem;
            resize: none;
        }
        .custom-textarea:focus {
            border-color: #0056b3;
            box-shadow: 0 0 10px rgba(0, 91, 187, 0.5);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Tambah Cast Baru</h1>
    <form method="post" action="/cast">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label> 
            <input type="text" placeholder="Nama Lengkap" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur:</label>
            <input class="form-control" placeholder="Umur" type="number" id="umur" name="umur" required>
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio:</label>
            <textarea class="form-control custom-textarea" placeholder="Tulis Bio" id="bio" name="bio" rows="5" required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a class="btn btn-warning ms-2" href="/cast">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
