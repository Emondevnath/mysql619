
<!doctype html>
<html lang="en" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>php</title>
    <link rel="icon"        href="images/php.png">
    <!-- css link -->
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet"  href="css/media.css">
  </head>

  <body>
   

   <div class="container mt-3">
     

    <?php 


    // localhost phpmyadmin

    // create Data base go to sql

    // sql

    1. CREATE DATABASE mysql619-------go(click)(db create)
    // create first table(main)
    2. CREATE TABLE address(
        
        id int(100) PRIMAY KEY AUTO_INCREMENT,
        location varchar(255) NOT NULL

    )

    go-----create first table(main table)

    // create new table

    3. CREATE TABLE students(

        id int(100) PRIMAY KEY AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        age int(100) NOT NULL,
        email varchar(255) NOT NULL,
        address_id int(100) NOT NULL,
        FOREIGN KEY(address_id) REFERENCES address(id)
    ) 
    
   // address----------sql
    // data insert
    INSERT INTO address (location) VALUES("sultanpur"),("west raozan"),("fokirhat")

    // students-----sql
    // data insert
    INSERT INTO students(name, age, email, a_id) VALUES
    ("EMON", 12, "EMON@GMAIL.COM", 1)
     
    SELECT * FROM students------go------(student all data see)
    SELECT name, age, email FROM students
    SELECT * FROM students WHERER ID=1,
    SELECT * FROM students WHERER name="robin",

    // data update
    UPDATE students SET name="kabir", email="ka@gamil.com" WHERE id=5
    // data delete

    DELETE  FROM address WHERE id=6

    // address and student data check 

    SELECT * FROM address, students WHERE address.id = students.address_id

    SELECT students.name, students.age, students.email, address.location FROM address, students WHERE  address.id = students.address_id

    ?>



   </div>


    <!-- script link -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

  </body>

</html>
