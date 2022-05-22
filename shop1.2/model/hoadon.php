<?php
class hoadon{
    var $mahd;
    var $makh;

    public static function contructnone(){
        
    }
    public function __construct($mahd,$tenkh){
        $this->mahd=$mahd;
        $this->tenkh=$tenkh;
    }
    public function getma(){
        return $this->mahd;
    }    
    public function insert(){
        $db=new connect();
        $query="INSERT INTO order values($this->mahd,$this->makh)";
        $db->chen($query);
    }
    public function delete(){
        $db=new connect();
        $query="DELETE FROM order WHERE MAKH='$this->makh'";
        $db->chen($query);
    }
}
?>