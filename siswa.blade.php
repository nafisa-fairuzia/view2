<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"></script>
</head>
<body>
    <div class="container text-center mt-3 bg-white">
        <h1>Data Siswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ul class="list-group">
                    @forelse ($siswa as $val)
                    <li class="list-group-item">{{ $val }}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data..</div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
