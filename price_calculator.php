<?php
//商品名
$product_name = "ノートパソコン";
//単価
$price = 80000;
//数量
$quantity = 2;
//消費税
$tax_rate = 0.1;

//小計計算
$subtotal = $price * $quantity;

//消費税(10％)16000円計算
$tax_amount = $subtotal * (1 + $tax_rate);

//合計金額//
$total = $subtotal + $tax_amount;

//商品名_$product_name表示//
echo "商品名: " . $product_name . "<br>";


//単価表示_$price//
echo "単価: " . $price . "円" . "<br>";
//数量表示_$quantity//
echo "数量: " . $quantity . "個" . "</br>";
//小計表示_subtotal//
echo "小計: " . $subtotal . "円" . "</br>";
//消費税_$tax_amount//
echo "消費税(10%): " . $tax_amount . "円" . "</br>";

//合計金額_$total//
echo "合計金額: " . $total . "円" . "</br>";
?>