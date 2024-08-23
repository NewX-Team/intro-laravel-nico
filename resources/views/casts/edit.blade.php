<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Cast</h1>
    <form method="post" action="/cast/{{$cast->id}}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required value="{{ $cast->nama }}">
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur:</label>
            <input type="number" name="umur" id="umur" class="form-control" required value="{{ $cast->umur }}">
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Bio:</label>
            <textarea name="bio" id="bio" class="form-control" rows="5" required>{{ $cast->bio }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/cast/{{ $cast->id }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
