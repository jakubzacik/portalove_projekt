<?php

namespace portalove;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


  public function getMenuItems(){
        $menuItems = [];
        $sql = "SELECT * FROM menu";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $menuItems[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'file' => $row['file']
            ];
        }
        return $menuItems;
        
    }

    public function getMenuItem($id){
        $menuItems = [];
        $sql = "SELECT * FROM menu WHERE id = $id";
        
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $menuItems[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'file' => $row['file']
            ];
        }
        return $menuItems;
        
    }


        public function getArticles($param){
        $clanky = [];

        $sql = "SELECT * FROM blog";

        switch($param){
            case "4": $sql = "SELECT * FROM blog LIMIT 4";break;
            case "latest": $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 1";break;
            case "3": $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";break;
        }
        
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $clanky[] = [
                'id' => $row['id'],
                'popis' => $row['popis'],
                'clanok' => $row['clanok'],
                'titulka' => $row['titulka'],
                'nadpis' => $row['nadpis']
            ];
        }
        return $clanky;
    }

    public function getArticle($id){
        $clanok = [];

        $sql = "SELECT * FROM blog WHERE id = $id";

        
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $clanok[] = [
                'id' => $row['id'],
                'popis' => $row['popis'],
                'clanok' => $row['clanok'],
                'titulka' => $row['titulka'],
                'nadpis' => $row['nadpis']
            ];
        }
        return $clanok;
    }
     public function deleteMSG($id){
        $sql = "DELETE FROM spravy WHERE id=$id;";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

     public function deleteMenu($id){
        $sql = "DELETE FROM menu WHERE id=$id;";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

     public function deleteBlog($id){
        $sql = "DELETE FROM blog WHERE id=$id;";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

     
    public function getMSG(){
        $msg = [];

        $sql = "SELECT * FROM spravy";

        
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $msg[] = [
                'id' => $row['id'],
                'meno' => $row['meno'],
                'mail' => $row['mail'],
                'subject' => $row['subject'],
                'sprava' => $row['sprava']
            ];
        }
        return $msg;
    }

public function sendMSG($name, $email, $subject, $message)
    {
        $sql = "INSERT INTO spravy(meno, mail, subject, sprava)
                VALUE ('".$name."', 
                '".$email."', 
                '".$subject."', 
                '".$message."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
}

        public function menuUpdate($id, $name, $file)
    {
        $sql = "UPDATE menu 
                SET name = '".$name."', file = '".$file."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function addMenu($name, $file)
    {
        $sql = "INSERT INTO menu(name, file)
                VALUE ('".$name."', 
                '".$file."')";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function addArticle($popis, $clanok,$titulka,$nadpis)
    {
        $sql = "INSERT INTO blog(popis, clanok, titulka, nadpis)
                VALUE ('".$popis."', '".$clanok."', '".$titulka."', '".$nadpis."' )";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


        public function articleUpdate($id, $popis, $clanok,$titulka,$nadpis)
    {
        $sql = "UPDATE blog 
                SET popis = '".$popis."', clanok = '".$clanok."', titulka = '".$titulka."', nadpis = '".$nadpis."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    
 }