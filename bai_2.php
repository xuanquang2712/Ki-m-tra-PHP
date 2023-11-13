<!-- Bài 2:
Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. Yêu cầu:
    Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.
    Hiển thị thông tin của tất cả sản phẩm trong mảng.
    Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity). -->
<?php
// Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity
$products = [
    "product1" => [
        "name" => "Laptop",
        "price" => 1000,
        "quantity" => 5
    ],

    "product2" => [
        "name" => "Smartphone",
        "price" => 500,
        "quantity" => 10
    ],

    "product3" => [
        "name" => "Headphones",
        "price" => 50,
        "quantity" => 20
    ]
];

// Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "Thông tin của tất cả sản phẩm:\n";
foreach ($products as $productKey => $product) {
    echo "Product: " . $productKey . "\n";
    echo "Name: " . $product['name'] . "\n";
    echo "Price: $" . $product['price'] . "\n";
    echo "Quantity: " . $product['quantity'] . "\n";
    echo "------------------------\n";
}

// Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}

// Hiển thị tổng giá trị của tất cả sản phẩm
$totalValue = calculateTotalValue($products);
echo "Tổng giá trị của tất cả sản phẩm là: $" . $totalValue . "\n";
?>