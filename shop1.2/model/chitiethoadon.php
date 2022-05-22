<?php
class chitiethoadon{
    var $mahd=null;
    var $tensp=null;
    var $soluong=null;

    public static function contructnone(){
        
    }
    public function __construct($mahd,$tensp,$soluong){
        $this->mahd=$mahd;
        $this->tensp=$tensp;
        $this->soluong=$soluong;
    }
    public function insert(){
        $db=new connect();
        $query="INSERT INTO product values($this->tensp,$this->gioitinh,$this->gia,$this->hinhanh)";
        $db->chen($query);
    }
    public function delete(){
        $db=new connect();
        $query="DELETE FROM product WHERE USERNAME='$this->username'";
        $db->chen($query);
    }
   /* public function countcart(){
        $db=new connect();
        $sql = "SELECT idorder FROM orderlist WHERE idorder=$this->mahd"; 
        $result=$db->chen($sql); 
        $number_of_rows=0;
        while($row1 = $result->fetch()){
            $number_of_rows++;
        }
        return $number_of_rows; 
    }*/
}
?>