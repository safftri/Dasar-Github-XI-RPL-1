<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method ="POST" action = "">
        <table>
        <br>
       <br>
       <h3>──────────────⊱◈◈◈⊰─────────────</h3>
      <h1>Data Nilai Ujian Kelas XI RPL</h1>
      <tr>
          <td>Jumlah Siswa</td>
          <td>:</td>
          <td><input type="number" name="jumlah" value=""></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><br><input type="submit" name="save" value="Proses"></td>
      </tr>
        </table>
        </form>
    </center>
</body>
</html>


<?php
  echo "<center>";
  if (isset($_POST ['save'])){
    $jumlah = $_POST ['jumlah'];
    echo "<form method =POST action = nilai2.php>";


    if ($jumlah){
        for($siswa = 1; $siswa <= $jumlah; $siswa++){
            echo "<table>";
            echo "<tr>";
            echo "<br>";
            echo "Data Siswa Ke-$siswa ";
            echo "<td>NIS : </td>";
            echo "<td><input type=text name=nis[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Nama : </td>";
            echo "<td><input type=text name=nama[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Kelas : </td>";
            echo "<td><input type=name name=kelas[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Bahasa Indonesia : </td>";
            echo "<td><input type=name name=indonesia[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Bahasa Inggris : </td>";
            echo "<td><input type=name name=inggris[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Matematika : </td>";
            echo "<td><input type=name name=matematika[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Produktif : </td>";
            echo "<td><input type=name name=produktif[] value=></td>";
            echo "</tr>";
            echo "</table>";

        }
    }
    
    echo "<br>";
    echo "<tr>";
    echo "<td></td>";
    echo "<input type=submit name=simpan value=Simpan>";
    echo "</tr>";
    echo "</form>";
    

}
  ?>