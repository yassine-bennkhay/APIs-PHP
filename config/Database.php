<?php
class Database{
    //DB params
    private $host='localhost';
    private $db_name='blog-api';
    private $username='root';
    private $password='yassine2000';
    private $connection;
    //DB connect
    public function connect(){
        $this->connection=null;

        try{
            $this->connection=new PDO('mysql:host='.$this->host. ',dbname='.$this->dbname,$this->username,$this->password);
            $this->connection=setAttribue(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo "Connection error:". $e->getMessage();
        }

        return $connection;
    }
}