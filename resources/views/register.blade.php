<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Register</title>
    <style>
        body {
            /* Atur background image dengan CSS */
            background-image: url('/images/pxfuel.jpg');
            /* Atur ukuran dan posisi background */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Atur warna teks dan elemen lain di atas background */
            color: rgb(10, 10, 10);
        }
    </style>
</head>
<body>
    <header>
        
        {{--<div class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="{{ asset('images/logo_tarakan.png') }}" alt="Logo"width="50" height="60">
            <a>Kota Tarakan</a>
        </div>--}}

        <nav>
            <!-- Elemen-elemen navigasi lainnya -->
        </nav>
    </header>
   
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 bg-white mx-auto">
        <h1>Register</h1>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                    
                @endforeach
            </ul>

        </div>
            
        @endif
        <form action="{{route('admin.register')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control{{$errors->has('nama') ? 'is-invalid':''}}"
                name="nama" placeholder="Nama lengkap"/>
            @error('nama')
            <div class ="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control{{$errors->has('email') ? 'is-invalid':''}}"
                name="email" placeholder="Alamat Email"/>
            @error('email')
            <div class ="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control{{$errors->has('password') ? 'is-invalid':''}}"
                name="password" placeholder="Password"/>
            @error('password')
            <div class ="invalid-feedback">{{$massage}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control{{$errors->has('password_confirmation') ? 'is-invalid':''}}"
                name="password_confirmation" placeholder="Konfirmasi Password"/>
            @error('password_confirmation')
            <div class ="invalid-feedback">{{$massage}}</div>
            @enderror
           </div>
           <div class="mb-3">
            <label for="role" class="form-label">Jabatan</label>
           <div class="form-group">
            <select class="form-control{{$errors->has('role') ? 'is-invalid':''}}"name="role">
              <option value="">Pilih :</option>
              <option value="kepala">kepala</option> 
              <option value="kel_bidang">kel_bidang</option> 
              <option value="seketaris">seketaris</option>
              <option value="seksi">seksi</option>     
            </select>
            </div>
            @error('role')
            <div class="invalid-feedback">{{$massage}}</div>
            @enderror
           </div>

           

            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>