<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
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
        
    
        <nav>
            <!-- Elemen-elemen navigasi lainnya -->
        </nav>
    
    </header>
    
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 bg-white mx-auto">
         
        <h1>Login</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                    
                @endforeach
            </ul>

        </div>
            
        @endif
        @if (session('pesan')=='berhasil')
        <div class="alert alert-success">Berhasil Register</div>
        @endif
        <form action="" method="POST">
          @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{old('email')}}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>    
            </div>
            <div class="mb-3 d-grid">
                <button name="reset" type="reset" class="btn btn-primary ">Reset</button>    
            </div>
            <div class="mb-3 d-grid">
                <a href="{{route('admin.register')}}" class="btn btn-primary">Daftar</a>   
            </div>
           
                
        </form>
    </div> 
    </div>
</body>
</html>