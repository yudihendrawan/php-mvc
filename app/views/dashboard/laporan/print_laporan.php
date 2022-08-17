<?php

require_once '/xampp/htdocs/sari_pasundan/public/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="'.BASEURL.'/css/print.css">
               <title>Laporan</title>
</head>
<body>
               <h1>Laporan Penjualan </h1>
               <h2>Data Penjualan</h2>
               <table border="1" cellpadding="10" cellspacing="0">
               <tr>
                <th>Nomor Transaksi</th> <th>Nama Produk</th> <th>Jumlah Produk </th> <th>Harga Satuan</th><th>Tanggal Transaksi</th> <th>Total Harga</th>
               </tr>';
               foreach ($data['laporan'] as $row){
                    $angka = $row['harga_produk'];
                              $harga_produk = "Rp " . number_format($angka, 2, ',', '.');
                              $total_harga = $row['total_harga'];
                              $total_harga = "Rp " . number_format($total_harga, 2, ',', '.');
                    $html .='<tr> 
                    <td>'. $row["id_penjualan"].' </td>
                    <td>'. $row["nama_produk"].' </td>
                    <td>'. $row["jumlah_pesanan"].' </td>
                    <td>'. $harga_produk.' </td>
                    <td>'. $row["tanggal_transaksi"].' </td>
                    <td>'. $total_harga.' </td>
     </tr>';
               }
     $html .='<tr>';
     foreach($data['subtotalharga'] as $row){
          $tot = $row['tot'];
          $subtot = "Rp " . number_format($tot, 2, ',', '.');
          $html .='
                         <td> </td>
                         <td> </td>
                         <td> </td>
                         <td> </td>
                         <td>Total Pendapatan </td>
                         <td>'.$subtot.'</td>';
                    };
       $html .= '</tr>
       </table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('laporan-sari-pasundan.pdf', \Mpdf\Output\Destination::INLINE);