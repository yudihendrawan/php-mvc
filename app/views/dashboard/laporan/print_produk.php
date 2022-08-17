<?php

require_once '/xampp/htdocs/sari_pasundan/public/vendor/autoload.php';

$mpdf1 = new \Mpdf\Mpdf();
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
                    <h2>Data Produk</h2>
                    <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                       <th>Nama Produk</th> <th>Jumlah Produk Terjual </th>
                    </tr>
                    ';
                    foreach ($data['produk'] as $row){
                         $html .='<tr>
                                        <td>'. $row["nama_produk"].' </td>
                                        <td>'. $row["sub_total"].' </td>
                         </tr>';
       }
       $html .= '<tr>
       <td>Total Produk Terjual</td>
       ';
       foreach($data['subtotal'] as $row){
          $html .= '<td>'. $row["total"].' </td>';
       }
       $html .= '</tr>
       </table>
</body>
</html>';
$mpdf1->WriteHTML($html);
$mpdf1->Output('laporan-produk-sari-pasundan.pdf', \Mpdf\Output\Destination::INLINE);