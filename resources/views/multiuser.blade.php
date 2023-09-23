<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-secondary">
  <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
    <h1>Halo!!</h1>
    <div>Selamat datang</div>
    <div class="pb-3">
      <a href="/logout" class="btn btn-sm btn-secondary">Logout >></a>
    </div>
  <div class="mb-3">
        @if (Auth::user()->role == 'kepala')
        <li class="list-group-item">Menu Kepala</li>
        <li class="list-group-item">Menu Kepala bidang</li>
        <li class="list-group-item">OPD</li>
        @endif

        @if (Auth::user()->role == 'kel_bidang')
        <li class="list-group-item">Menu Kepala bidang</li>
        <li class="list-group-item">Menu Seketaris</li>
        @endif

        @if (Auth::user()->role == 'seketaris')
        <a href='{{url ('jadwal')}}' class="btn btn-secondary">Menu Seketaris</a>
        <a href='{{url ('melihat')}}' class="btn btn-secondary">Menu Seksi</a>
        @endif

        @if (Auth::user()->role == 'seksi')
        <a href='{{url ('melihat')}}' class="btn btn-secondary">menu jadwal</a>
        @endif
      </ul>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>