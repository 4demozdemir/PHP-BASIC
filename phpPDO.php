<?php
 // PDO DB Connect    
     try {

    $host = 'localhost';
    $dbname = 'patikaDb';
    $username = 'root';
    $password = 'root';
    
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db->query('USE your');
    $db->query("SET CHARACTER SET utf8mb4");
    $db->query("SET CHARACTER_SET_CONNECTION=utf8mb4");
    $db->query("SET @@lc_time_names = 'tr_TR'");
    echo"Succesfull <br>";
    } catch ( PDOException $e ){
    print $e->getMessage();
    }




//PDO CRUD 
 
//Create   TEK VERİ EKLEME
$sql = "INSERT INTO users 
        SET firstname = 'Ahmet', lastName = 'ERSEVER', age = '1999'";
$query = $db->query($sql);
if ( $query->rowCount() ){
    echo $query->rowCount().' adet veri eklendi';
}
// ÇOKLU VERİ EKLEME
$sql = "INSERT INTO users (firstName, lastName, age) 
        VALUES ('Ahmet', 'ÇAKAR', '2005'), 
               ('Musa', 'KALKAN', '2002'), 
               ('Mehmet', 'BÜYÜK', '2004')";
               
$query = $db->query($sql);

if ( $query->rowCount() ){
    echo $query->rowCount().' adet veri eklendi';
}









//Update


try {
    
$sql = "UPDATE users SET firstName = 'casper' WHERE id = 3";
$query = $db->query($sql);

if ( $query->rowCount() ){
echo $query->rowCount().' adet veri güncellendi';
}
} catch (PDOException $e) {
    print $e->getMessage();
}





//Read


$sql = "SELECT * FROM users";
$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}

$sql = "SELECT * FROM users WHERE id = 1";
$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}






//Delete



$sql = "DELETE FROM users WHERE id > 10";
$query = $db->query($sql);

if ( $query->rowCount() ){
    echo  $query->rowCount(). ' adet satir silindi.';
}


//PREPARE


$query = $db->prepare("INSERT INTO users SET
                                firstName = ?,
                                lastName = ?,
                                age = ?");
$insert = $query->execute(["Fatma", "BURAK", "21"]);
if ( $query->rowCount() ){
    echo $db->lastInsertId();
    echo ' '.$query->rowCount()." adet satır etkilendi!";
}

    ?>