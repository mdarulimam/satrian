<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Monitoring Kualitas Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Monitoring Kualitas Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <!-- proses real time phmeter -->
    <script type="text/javascript">
      $(document).ready( function() {
        // interval refresh / realtime =1 detik
        setInterval( function() {
          $("#nilai-phmeter").load("baca_nilai_phmeter.php") ;
          $("#status-phmeter").load("baca_status_phmeter.php") ;
          $("#nilai-suhu").load("baca_nilai_suhu.php") ;
          $("#status-suhu").load("baca_status_suhu.php") ;
          $("#nilai-tds").load("baca_nilai_tds.php") ;
          $("#status-tds").load("baca_status_tds.php") ;
        }, 1000 );
      });
    </script>
    <!-- akhir real time phmeter -->
  </head>
  <body>
    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg" style="background-color: #4CAF50; color: white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color: white;">Dashboard Monitoring Air</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grafik_monitoring.php" style="color: white;">Grafik Monitoring</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datamonitoring.php" style="color: white;">Data Monitoring</a>
        <li>
      </ul>
    </div>
  </div>
</nav>

 <!-- Tabel Data Sensor -->
    <div class="container mt-5">
      <h3 class="text-center">Data Detail Sensor</h3>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Nilai pH</th>
            <th scope="col">Nilai Suhu (°C)</th>
            <th scope="col">Nilai TDS (ppm)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2024-09-01</td>
            <td>7.0</td>
            <td>27.5</td>
            <td>30</td>
          </tr>
          <tr>
            <td>2024-09-02</td>
            <td>7.0</td>
            <td>27.8</td>
            <td>30</td>
          </tr>
          <tr>
            <td>2024-09-03</td>
            <td>7.0</td>
            <td>27.0</td>
            <td>30</td>
          </tr>
          <tr>
            <td>2024-09-04</td>
            <td>7.0</td>
            <td>27.6</td>
            <td>30</td>
          </tr>
          <tr>
            <td>2024-09-05</td>
            <td>7.2</td>
            <td>27.2</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
