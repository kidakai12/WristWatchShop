<?php
include_once "connect/connect.php";
class khachang{
    var $makh=null;
    var $tenkh=null;
    var $sdt=null;
    var $diachi=null;
    var $username=null;
    var $password=null;
    var $email=null;




    public function contructnone(){
        
    }
    public function __construct($makh,$tenkh,$sdt,$diachi,$username,$password){
        $this->makh=$makh;
        $this->tenkh=$tenkh;
        $this->sdt=$sdt;
        $this->diachi=$diachi;
        $this->username=$username;
        $this->password=$password;
    }
    public function insert(){
        $db=new connect();
        $query="INSERT INTO khachang values($this->tenkh,$this->sdt,$this->diachi,$this->username,$this->password,$this->email)";
        $db->chen($query);
    }
    public function delete(){
        $db=new connect();
        $query="DELETE FROM khachang WHERE USERNAME='$this->username'";
        $db->chen($query);
    }
    public function update(){
        $db=new connect();
        $query="UPDATE khachang SET DIACHI='$this->diachi',PASSWORD='$this->password',TENKH='$this->tenkh',SDT='$this->sdt',EMAIL='$this->email' WHERE USERNAME='$this->username'";
        $db->chen($query);
    }
}
?>