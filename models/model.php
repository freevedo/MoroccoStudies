<?php 
 require 'controlers/database.php';
    function getContact(){
        $db = Database::connect();
        $statement= $db->query('SELECT *FROM contact WHERE id = 1');
        $contact=$statement->fetch();
        return $contact;
    }
    function getArticle1(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE name = "hero1"');
        $article   = $statement->fetch();
        return $article;
    }
    function getArticle2(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE name = "hero2"');
        $article   = $statement->fetch();
        return $article;
    }
    function getArticle3(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE name = "hero3"');
        $article   = $statement->fetch();
        return $article;
    }
    function getArticle4(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE name = "about1"');
        $article   = $statement->fetch();
        return $article;
    }
    function getArticle5(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE name = "about2"');
        $article   = $statement->fetch();
        return $article;
    }
    function getArticle6(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE name = "about3"');
        $article   = $statement->fetch();
        return $article;
    }
    function getImage1(){
        $db = Database::connect();
         $statement = $db->query('SELECT *FROM image WHERE id = 1');
         $image = $statement->fetch();
        return $image;
        
    }
    function getImage2(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM image WHERE id = 2');
                $image = $statement->fetch();
        return $image;
        
    }
    function getImage3(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM image WHERE id = 3');
        $image = $statement->fetch();
        return $image;
        
    }
    function getImage4(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM image WHERE id = 4');
        $image = $statement->fetch();
        return $image;
        
    }
    function getAboutList1(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM article WHERE category = 3 AND name = "about-lists1"');
        $article   = $statement->fetch();
        return $article;
    }
    function getAboutLists(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM article WHERE category = 3 ');
        $statement->execute();
        return $statement;
    }
    function getServices(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM article WHERE category = 5');
        $statement->execute();
        return $statement;
    }
    function getImageCard(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM image WHERE category = 6 and title = "card"');
        $statement->execute();
        return $statement;
    }
    function getImageWeb(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM image WHERE category = 6 and title = "web"');
        $statement->execute();
        return $statement;
    }
    function getImageApp(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM image WHERE category = 6 and title = "app"');
        $statement->execute();
        return $statement;
    }
    function getTeam1(){
        $db = Database::connect();
        $statement = $db->query('SELECT *FROM team WHERE id = 1');
        $team = $statement->fetch();
        return $team;
    }
    function getTeam(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM team WHERE id != 1');
        $statement->execute();
        return $statement;
    }
    function getFaq(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT *FROM article WHERE category  =  8');
        $statement->execute();
        return $statement;
    }
?>
