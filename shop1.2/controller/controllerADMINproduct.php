
<?php
include '../connect/connect.php';
include('../DatabaseHelper.php');
$db2=connection();
$db=new connect();
//Thư mục bạn sẽ lưu file upload
$target_dir    = "../img1/product/casio/";
//Vị trí file lưu tạm trong server
$target_file   = $target_dir . basename($_FILES["hinhanh"]["name"]);
$allowUpload   = true;
//Lấy phần mở rộng của file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 800000; //(bytes)
////Những loại file được phép upload
$allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


if(isset($_POST["submit"])) {
    //Kiểm tra xem có phải là ảnh
    $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
    if($check !== false) {
        echo "Đây là file ảnh - " . $check["mime"] . ".";
        $allowUpload = true;
    } else {
        echo "Không phải file ảnh.";
        $allowUpload = false;
    }
}

// Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
if (file_exists($target_file)) {
    echo "File đã tồn tại.";
    $allowUpload = false;
}
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($_FILES["hinhanh"]["size"] > $maxfilesize)
{
    echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
    $allowUpload = false;
}


// Kiểm tra kiểu file
if (!in_array($imageFileType,$allowtypes ))
{
    echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    $allowUpload = false;
}

// Check if $uploadOk is set to 0 by an error
if ($allowUpload) {
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file))
    {
        echo "File ". basename( $_FILES["hinhanh"]["name"]).
        " Đã upload thành công";
    }
    else
    {
        echo "Có lỗi xảy ra khi upload file.";
    }
}
else
{
    echo "Không upload được file!";
}
$masp=$_POST['id'];
$tensp=$_POST['tensp'];
$danhcho=$_POST['gioitinh'];
$gia=$_POST['gia'];
if($_POST['action']=="them")
{
$db2->exec("INSERT INTO `products` VALUES(null,'$tensp','$danhcho',$gia,'$target_file') ");
echo "<script>alert('Thêm sản phẩm thành công');window.location.href='../adminproduct.php'</script>";
exit;
}
if($_POST['action']=="sua")
{
$db2->exec("UPDATE `products` SET `name`='$tensp',`danhcho`='$danhcho',`price`=$gia,`image`='$target_file') WHERE id=$masp");
echo "<script>alert('Chỉnh sửa thành công');window.location.href='../adminproduct.php'</script>";
exit;
}
?>