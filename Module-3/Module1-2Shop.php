<?php
$shop = "The Wicked Shop!";

$dresses = [
    ["name" => "Glinda's Uniform", "price" => 799, "stock" => 10],
    ["name" => "Glinda's Bubble Dress", "price" => 1499, "stock" => 3],
    ["name" => "Elphie's Uniform", "price" => 599, "stock" => 8],
    ["name" => "The Wicked Witch of the West's Dress", "price" => 999, "stock" => 4]
];


$discount = 10;
$message = "All prices below already include a " . $discount . "% discount!";

$discount1 = $dresses[0]["price"] * ($discount / 100);

$final1 = $dresses[0]["price"] - $discount1;

$discount2 = $dresses[1]["price"] * ($discount / 100);

$final2 = $dresses[1]["price"] - $discount2;

$discount3 = $dresses[2]["price"] * ($discount / 100);

$final3 = $dresses[2]["price"] - $discount3;

$discount4 = $dresses[3]["price"] * ($discount / 100);

$final4 = $dresses[3]["price"] - $discount4;
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
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px #ff99cc;
        }
        th {
            background: #ff66b2;
            color: white;
            padding: 12px;
        }
        tr {
            background: linear-gradient(
                to right,
                rgba(144, 238, 144, 0.4),
                rgba(255, 228, 242, 0.4)
            );
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #ffb3d9;
            text-align: center;
        }
        .note {
            text-align: center;
            font-style: italic;
            margin-bottom: 20px;
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
<p class="note"><?php echo $message; ?></p>

<table>
    <tr>
        <th>Dress</th>
        <th>Price (After Discount)</th>
        <th>Stock</th>
    </tr>

    <?php
    for ($i = 0; $i < count($dresses); $i++) {

        $discountAmount = ($dresses[$i]["price"] * $discount) / 100;
        $finalPrice = $dresses[$i]["price"] - $discountAmount;

        if ($dresses[$i]["stock"] <= 3) {
            $stockDisplay = "<span class='lowStock'>" . $dresses[$i]["stock"] . " (Low Stock!)</span>";
        } else {
            $stockDisplay = $dresses[$i]["stock"];
        }

        echo "<tr>";
        echo "<td>" . $dresses[$i]["name"] . "</td>";
        echo "<td>" . $finalPrice . "</td>";
        echo "<td>" . $stockDisplay . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>