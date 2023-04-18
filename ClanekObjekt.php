<?php
class Clanek
{
    private $title;
    private $content;
    private $image;
    private $author;
    private $destination;
    private $date;
    public function __construct($clanekId)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "travelblog";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) 
        die("Connection failed: " . $conn->connect_error);

        $query = "SELECT * FROM articles WHERE idArticles = $clanekId";
        $result = $conn->query($query);
        $articleAssoc = $result->fetch_assoc();

        $this->title = $articleAssoc['Title'];
        $this->content = $articleAssoc['Content'];
        $this->image = $articleAssoc['ProfileImg'];
        $this->date = $articleAssoc['DatePublic'];

        $query = "SELECT User FROM users WHERE idUsers = '".$articleAssoc['Author']."'";
        $result = $conn->query($query);
        $this->author = $result->fetch_assoc()['User'];

        $query = "SELECT Name FROM destination WHERE idDestination = '".$articleAssoc['Destination']."'";
        $result = $conn->query($query);
        $this->destination = $result->fetch_assoc()['Name'];
    }
    
    public function get_title()
    {
        return $this->title;
    }
    
    public function get_content()
    {
        return $this->content;
    }
    
    public function get_image()
    {
        return $this->image;
    }
    
    public function get_author()
    {
        return $this->author;
    }
    
    public function get_destination()
    {
        return $this->destination;
    }
    
    public function get_date()
    {
        return $this->date;
    }
}
?>