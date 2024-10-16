<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Array barang dengan harga dan jumlah
$items = [
    ["Sepatu", 50000, 3],
    ["Baju", 70000, 5],
    ["Tas", 12000, 10]
];

// Function untuk menghitung total
function calculateTotal($harga, $jumlah) {
    return $harga * $jumlah;
}
?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($items as $item): 
            $total = calculateTotal($item[1], $item[2]); 
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $item[0]; ?></td>
            <td><?php echo "Rp" . number_format($item[1], 2, ',', '.'); ?></td>
            <td><?php echo $item[2]; ?></td>
            <td><?php echo "Rp" . number_format($total, 2, ',', '.'); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>