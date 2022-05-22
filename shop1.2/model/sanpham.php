<?php
class sanpham{
    var $masp=null;
    var $tensp=null;
    var $gioitinh=null;
    var $gia=null;
    var $hinhanh=null;


    public function contructnone(){
        
    }



    public function __contruct($masp,$tensp,$gioitinh,$gia,$hinhanh){
        $this->masp=$masp;
        $this->tensp=$tensp;
        $this->gioitinh=$gioitinh;
        $this->gia=$gia;
        $this->gia=$gia;
        $this->hinhanh=$hinhanh;   
    }
    public function insert(){
        $db=new connect();
        $query="INSERT INTO products values($this->tensp,$this->gioitinh,$this->gia,$this->hinhanh)";
        $db->chen($query);
    }
    public function delete(){
        $db=new connect();
        $query="DELETE FROM products id ='$this->masp'";
        $db->chen($query);
    }
    public function update(){
        $db=new connect();
        $query="UPDATE products SET DIACHI='$this->tensp',PASSWORD='$this->gioitinh',TENKH='$this->gia',SDT='$this->hinhanh' WHERE id='$this->masp'";
        $db->chen($query);
    }
}
?>