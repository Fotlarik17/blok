<?php

use function PHPSTORM_META\argumentsSet;

class Clanek
{
    private $title;
    private $content;
    private $image;
    private $author;
    private $destination;
    private $date;

    public static function get_destinations()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "travelblog";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) 
        die("Connection failed: " . $conn->connect_error);

        $query = "SELECT * FROM destination";
        $result = $conn->query($query);
        $destinations = array();
        while ($row = $result->fetch_assoc())
        {
            $destinations.array_push($row["Name"]);
        }
        $conn->close();
        return $destinations;
    }

    public static function get_authors()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "travelblog";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) 
        die("Connection failed: " . $conn->connect_error);

        $query = "SELECT * FROM users";
        $result = $conn->query($query);
        $authors = array();
        while ($row = $result->fetch_assoc())
        {
            $authors.array_push($row["User"]);
        }
        $conn->close();
        return $authors;
    }

    public static function get_titles()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "travelblog";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) 
        die("Connection failed: " . $conn->connect_error);

        $query = "SELECT * FROM articles";
        $result = $conn->query($query);
        $titles = array();
        while ($row = $result->fetch_assoc())
        {
            $titles.array_push($row["Title"]);
        }
        $conn->close();
        return $titles;
    }

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