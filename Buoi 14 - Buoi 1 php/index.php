<h1>Đây là file php</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buoi 1</title>
</head>
<body>
    <?php
    //1. cú pháp in ra màn hình 
    echo"Hello World! <br>";

    echo"PHP";

    //2. Biến
    // Cú pháp: $ + tên biến = giá trị của biến
    $ten = "Sua";
    $tuoi = 21;
    
    echo " Xin chào " . $ten . " ". $tuoi . " tuổi";

    //3. Hằng
    define("soPi", " 3.14 <br>");
    echo soPi . "<br>" ;

    //4. Phân biệt ' ' và " "
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";

    //5. Chuỗi
    #5.1 Kiểm tra độ dài chuỗi
    echo strlen($ten) . "<br>";
    #5.2 Đếm số từ
    echo str_word_count($ten) . "<br>";
    #5.3 Tìm kiếm ký tự trong chuỗi
    echo strpos($ten, "S") . "<br>";
    #5.4 thay thế kí tự trong chuỗi
    echo str_replace("Sua", "Sua~", $ten). "<br>";

    //6. Toán tử
    $soThuNhat = 10;
    $soThuHai = 5;

    // + - * / %
    // += -= *= /= %=
    echo $soThuNhat %= $soThuHai ;

    # so sánh == != > < >= <= ===
    
    //7. Câu điều kiện
    //if ("Điều kiện"){
    // logic
    //}
    // else if ("Điều kiện"){
        //logic
    // }
    // else{
    //     logic
    // }
    
    // Kiểm tra tổng của số thứ nhất và số thứ 2
    // nếu < 15, thì hiển thị tổng là ... nhỏ hơn 15 
    // nếu = 15, thì hiển thị tổng = 15
    // nếu > 15, thì hiển thị tổng là ... lớn hơn 15
    $soThuNhat = 10;
    $soThuHai = 5;

    $tong = $soThuNhat + $soThuHai;
    if ($tong < 15){
        echo "<br>tổng là " . $tong . " nhỏ hơn 15"; 
    }
    else if ($tong == 15){
        echo "<br>tổng là " . $tong;
    }
    else{
        echo "<br>tổng là " . $tong . " lớn hơn 15"; 
    }
    //8. switch case
    $color = "red";
    switch ($color){
        case "red":
            echo "<br> is red";
            break;
        case "blue":
            echo "<br> is blue";
            break;
        default:
            echo "<br> no color";
            break;
    }
    //9. for
    for ($i=0; $i <100; $i++){
        echo $i . "<br>";
    }
    ?>
</body>
</html>