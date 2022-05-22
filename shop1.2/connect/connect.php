<?php
class connect{
    var $db=null;
    public function __construct(){
        try {
        $dsn='mysql:host=localhost;dbname=quanlydongho';
        $user='root';
        $pass='';
        $this->db=new PDO($dsn,$user,$pass);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            exit();
            }
    }
    public function thucthi($query){
        $stmt = $this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->execute();
        return $stmt;
    }
    public function truyvan($select){
        $stmt = $this->db->prepare($select);
        $stmt->setFetchMode(PDO::FETCH_BOTH);
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    public function chen($select){
        $stmt = $this->db->prepare($select);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt;
    }
    //dành cho insert hoặc delete ho
    public function thucthi2($query)
    {
        $results=$this->db->exec($query);
        return $results;
    }
}
?>