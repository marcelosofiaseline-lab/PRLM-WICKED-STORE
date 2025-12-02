<?php
declare(strict_types=1);

$shop = "The Wicked Shop! – Stock Monitor";

$wickedProducts = [
    "GlindaUniform" => ["price" => 799, "stock" => 10],
    "GlindaBubbleDress" => ["price" => 1499, "stock" => 3],
    "ElphieUniform" => ["price" => 599, "stock" => 8],
    "WickedWitchDress" => ["price" => 999, "stock" => 4],
    "ShizSchoolCape" => ["price" => 699, "stock" => 12],
    "EmeraldCityGown" => ["price" => 1799, "stock" => 6],
    "MoribleWeatherDress" => ["price" => 1299, "stock" => 2]
];

$taxRate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $taxRate = 0): float {
    $totalValue = $price * $qty;
    return $totalValue * ($taxRate / 100);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $shop; ?></title>

    <style>
        body {
            background: linear-gradient(to right, lightgreen, #ffe4f2);
            font-family: 'Wicked Font', sans-serif;
            color: #7a0050;
            padding: 20px;
        }
        .shopName {
            font-family: 'Wicked Font Hollow', sans-serif;
            text-align: center;
            font-size: 60px;
            background: linear-gradient(to right, black, green, hotpink, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;  
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px #ffb3d9;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ffd1e8;
            text-align: center;
        }
        th {
            background: #ff66b2;
            color: #7a0050;
            padding: 10px;
        }
        @font-face {
            font-family: 'Wicked Font';
            src: url('Wicked Font/WickedFont-Regular-BF65f34594abb81.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Wicked Font Hollow';
            src: url('Wicked Font/WickedFontHollow-Regular-BF65f3459671da4.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>

<h1 class="shopName"><?php echo $shop; ?></h1>
<?php include 'include/header.php'; ?>

<table>
    <tr style="letter-spacing: 2px;">
        <th>Product</th>
        <th>Price (Php)</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>

    <?php foreach ($wickedProducts as $productName => $data): ?>
        <tr>
            <td><?php echo $productName; ?></td>
            <td><?php echo number_format($data["price"], 2); ?></td>
            <td><?php echo $data["stock"]; ?></td>
            <td><?php echo get_reorder_message($data["stock"]); ?></td>
            <td><?php echo number_format(get_total_value($data["price"], $data["stock"]), 2); ?></td>
            <td><?php echo number_format(get_tax_due($data["price"], $data["stock"], $taxRate), 2); ?></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php include 'include/footer.php'; ?>
</body>
</html>