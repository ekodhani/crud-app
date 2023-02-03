<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CRUD App</a>
        </div>
    </nav>
    
    @yield('container')
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      const flashdata = $('.flash-data-success').data('flashdata');

      if (flashdata) {
        Swal.fire({
          icon: 'success',
          title: 'Great',
          text: flashdata
        })
      }

      $('.tombol-hapus').on('click', function (e) {

        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah Kamu Yakin ?',
            text: "Data Akan Di Hapus ??",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        });
      });
    </script>
    <script src="https://kit.fontawesome.com/05b2942c03.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>