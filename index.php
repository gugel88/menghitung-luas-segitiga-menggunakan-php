<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>APLS3 - Abdul Mujib</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Roboto:100);
        .flat-form {
          background: #e74c3c;
          color: white;
          margin: 50px auto;
          width: 400px;
          height: 400px;
          position: relative;
          font-family: 'Roboto';
        }
        .flat-form .tabs {
          display: block;
          background: #c0392b;
          width: 100%;
          height: 40px;
          margin: 0;
          margin-bottom: 20px;
          padding: 0;
          position: relative;
          list-style-type: none;
        }
        .flat-form .tabs li {
          display: block;
          margin: 0;
          padding: 0;
          float: left;
        }
        .flat-form .tabs li a {
          display: block;
          background: #c0392b;
          color: white;
          text-decoration: none;
          font-size: 15px;
          float: left;
          padding: 12px 22px;
        }
        .flat-form .tabs li a.active {
          background: #e74c3c;
          border-right: none;
          -moz-transition: all 0.5s linear;
          -o-transition: all 0.5s linear;
          -webkit-transition: all 0.5s linear;
          transition: all 0.5s linear;
        }
        .flat-form .tabs li a:hover {
          background: #d65548;
          -moz-transition: all 0.5s linear;
          -o-transition: all 0.5s linear;
          -webkit-transition: all 0.5s linear;
          transition: all 0.5s linear;
        }
        .flat-form .tabs li:last-child a {
          text-align: center;
          width: 174px;
          padding-left: 0;
          padding-right: 0;
          border-right: none;
        }
        .flat-form .form-action {
          padding: 0 20px;
          position: relative;
        }
        .flat-form h1 {
          font-size: 40px;
          padding-bottom: 10px;
        }
        .flat-form p {
          font-size: 15px;
          padding-bottom: 10px;
          line-height: 25px;
        }
        .flat-form a {
          color: yellow;
          text-decoration: none;
        }
        .flat-form a:hover {
          text-decoration: underline;
        }
        .flat-form form {
          padding-right: 20px !important;
        }
        .flat-form form input[type=text], .flat-form form input[type=password], .flat-form form input[type=submit] {
          font-family: 'Roboto';
        }
        .flat-form form input[type=text], .flat-form form input[type=password] {
          width: 100%;
          height: 40px;
          margin-bottom: 10px;
          padding-left: 15px;
          background: #fff;
          border: none;
          color: #e74c3c;
          outline: none;
        }
        .flat-form form input.button {
          border: none;
          display: block;
          background: #136899;
          height: 40px;
          width: 80px;
          color: #ffffff;
          text-align: center;
          -moz-border-radius: 5px;
          -webkit-border-radius: 5px;
          border-radius: 5px;
          -moz-box-shadow: 0px 3px 1px #2075aa;
          -webkit-box-shadow: 0px 3px 1px #2075aa;
          box-shadow: 0px 3px 1px #2075aa;
          -moz-transition: all 0.15s linear;
          -o-transition: all 0.15s linear;
          -webkit-transition: all 0.15s linear;
          transition: all 0.15s linear;
        }
        .flat-form form input.button:hover {
          background: #1e75aa;
          -moz-box-shadow: 0 3px 1px #237bb2;
          -webkit-box-shadow: 0 3px 1px #237bb2;
          box-shadow: 0 3px 1px #237bb2;
        }
        .flat-form form input.button:active {
          background: #136899;
          @inclue box-shadow( 0 3px 1px #0f608c );
        }
        .flat-form form input::-webkit-input-placeholder {
          color: #e74c3c;
        }
        .flat-form form input:-moz-placeholder {
          color: #e74c3c;
        }
        .flat-form form input::-moz-placeholder {
          color: #e74c3c;
        }
        .flat-form form input:-ms-input-placeholder {
          color: #e74c3c;
        }
        .flat-form .show {
          display: block;
        }
        .flat-form .hide {
          display: none;
        }

        body {
          background: #1a1a1a;
        }
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  <script>
    function HanyaAngkaYaAbdulMujib(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

</head>

<body>
  <div class="flat-form">
  <ul class="tabs">
    <li>
      <a href="#apls3" class="active">Hitung</a>
    </li>
    <li>
      <a href="#tentang">Tentang Aplikasi</a>
    </li>
  </ul>

  <div id="apls3" class="form-action show">
    <?php
    if($_POST['submit']){
      $alas = $_POST['alas'];
      $tinggi = $_POST['tinggi'];
    }
    ?>    
    <h1>Mulai</h1>
    <p>Menghitung luas Segitiga</p>
    <form method="post" action="index.php">
      <ul>
        <li>
          <input type="text" name="alas" placeholder="Input alas" onkeypress="return HanyaAngkaYaAbdulMujib(event)"  required/>
        </li>
        <li>
          <input type="text" name="tinggi" placeholder="Input tinggi" onkeypress="return HanyaAngkaYaAbdulMujib(event)" required/>
        </li>
        <li>
          <input type="submit" name="submit" value="Hitung" class="button" />
        </li>
      </ul><br>
      <p>

      <?php $hasil = ($alas * $tinggi)/2 ; ?>
      <table border="0">
        <tr>
          <td>Alas</td> <td>=</td> <td><?php echo "$alas"; ?></td> 
        </tr>
        <tr>
          <td>Tinggi</td> <td>=</td> <td><?php echo "$tinggi"; ?></td> 
        </tr>
        <tr>
          <td>Alas*Tinggi/2</td> <td>=</td> <td><?php echo "$hasil"; ?></td> 
        </tr>                
      </table>
      </p>
    </form>    
  </div>
  <!--/#end APLS3 Mulai-->

  <div id="tentang" class="form-action hide">
    <h1>Tentang APLS3</h1>
    <p>APLS3 merupakan singkatan dari <strong>Aplikasi Perhitungan Luas Segitiga,</strong> APLS3 dibangun oleh <a href="https://facebook.com/abmujib" target="_blank" title="Abdul Mujib">Abdul Mujib</a> Mahasiswa Universitas Muhammadiyah Sukabumi Semester II. Tujuan dibangun aplikasi ini adalah untuk memenuhi salah satu tugas Ujian Semester Mata kuliah Algoritma dan Pemerograman dengan dosen pembimbing <a href="http://teknikinformatika.ummi.ac.id/index.php?p=Detail&dosen_id=Mw==" target="_blank" title="Asep Budiman Kusdinar, M. T.">Asep Budiman Kusdinar, M. T.</a> <br><br>
    Untuk mulai menggunakan APLS3 ini silahkan klik menu Hitung</p>
  </div>
  <!--/#end APLS3 Tentang-->

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>