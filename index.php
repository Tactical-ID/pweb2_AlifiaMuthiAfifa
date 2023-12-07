<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SI PILKADES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="components/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="components/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="components/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="components/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="homeAdmin.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">SI PILKADES</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="home" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="pemilih" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Data Pemilih</a>
                    <a href="calon_kades" class="nav-item nav-link"><i class="fa fa-user-plus me-2"></i>Data Calon</a>
                    <a class="nav-item nav-link" onclick="logout()" style="cursor: pointer;"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <!-- <script src="lib/easing/easing.min.js"></script> -->
    <script src="components/lib/waypoints/waypoints.min.js"></script>
    <script src="componentslib/owlcarousel/owl.carousel.min.js"></script>
    <script src="components/lib/tempusdominus/js/moment.min.js"></script>
    <!-- <script src="lib/tempusdominus/js/moment-timezone.min.js"></script> -->
    <script src="components/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="components/js/main.js"></script>
    <script>
        src = "assets/dist/js/bootstrap.bundle.min.js"
        function logout(){
              if(confirm('Yakin Ingin Keluar?')) {
                window.location.href = "sign-in";
              }else{
                window.location.href = "home";
              }
          
          };
      </script>
</body>

</html>