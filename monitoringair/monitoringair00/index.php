<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Kekeruhan Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <!-- proses realtime -->
    <script type="text/javascript">
      
      $(document).ready( function() {

        // interval refresh / realtime = 1 detik = 1000ms
        setInterval( function() {
            $("#kekeruhan").load("bacakekeruhan.php") ;
            $("#status").load("bacastatus.php");
        }, 1000 );

      } );

    </script>
    <!-- akhir proses realtime -->

  </head>
  <body>
    
    <div class="container" style="text-align: center; margin-top: 100px;">
      <img src="img/koper.png" style="width: 100px">
      <h2>Sistem Monitoring Kekeruhan Air<br>Secara Realtime Melalui Halaman Website</h2>

      <p style="font-size: 24px;">- Menggunakan Sensor Turbidity -</p>

      <!-- Kolom tampilan nilai sensor -->
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <!-- kotak untuk nilai sensor -->
            <div class="card">
              <div class="card-header" style="background-color: red; color: white;">
                <h3>NILAI KEKERUHAN</h3>
              </div>
              <div class="card-body" id="kekeruhan">
                
              </div>
            </div>
            <!-- akhir kotak nilai sensor -->
          </div>
          <div class="col">
            <!-- kotak untuk status air -->
            <div class="card">
              <div class="card-header" style="background-color: blue; color: white;">
                <h3>STATUS AIR</h3>
              </div>
              <div class="card-body" id="status">
                
              </div>
            </div>
            <!-- akhir kotak status air -->
          </div>
        </div>
      </div>
      <!-- Akhir kolom tampilan nilai sensor -->
      <br>
      <img src="img/subscribe.png">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>