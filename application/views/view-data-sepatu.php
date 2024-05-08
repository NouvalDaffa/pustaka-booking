<html>
<head>

 <title>Toko Sepatu</title>
</head>

<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Data Pembelian Sepatu
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <td>Nama Pembeli</td>
 <td>:</td>
 <td>
 <?= $kode; ?>
 </td>
 </tr>
 <tr>
 <td>No. HP</td>
 <td>:</td>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <td>Merk</td>
 <td>:</td>
 <td>
 <?= $merk; ?>
 </td>
 </tr>
 <tr>
 <td>Harga</td>
 <td>:</td>
 <td>
 <?= $harga; ?>
 </td>
 </tr>
 <tr>
 <td>Ukuran</td>
 <td>:</td>
 <td>
 <?= $ukuran; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('Sepatu'); 
?>">Kembali</a>
 </td>

 </tr>
 </table>
 </center>
</body>

</html