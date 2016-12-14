<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Notebook</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        
    </head>
    <body>
        
        <section class="notebook entry">
            
            <?php
            $servername = getenv('web-dev-demos-bmajor4.c9users.io');
            $username = 'bmajor4';
            $password = "";
            $database = "c9";
            $dbport = 3306;
            $dbname = "storedata";
            
            $db = new mysqli($servername, $username, $password, $database, $dbport);
            
            
            if ($db->connect_error) {
                die("Connection Failed: " . $db->connect_error);
            }
            
            echo ("Connected Successfully: " . $db->host_info);
            
            mysqli_select_db($db, $dbname);
            if (empty($result)) {
                $sql = "CREATE TABLE NotesKept(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(250) NOT NULL,
                    notebook VARCHAR(2000) NOT NULL)";
                    
            /*         if ($db->query($sql) === TRUE) {
                print_r("<br>Table NotesKept was created successfully.");
            } else {
                print_r("<br>OK: " . $db->error);
            }
                    
            }
            $title = mysqli_real_escape_string($db, $_POST['title']);
            $notes = mysqli_real_escape_string($db, $_POST['notes']);
            $notes_insert = "INSERT INTO NotesKept(title, notes) VALUES ('$title','$notes')";
            if (mysqli_query($db, $notes_insert)) {
                echo "<br>Records added successfully.";
           } else {
                echo "<br>ERROR: Could not able to excute $notes_insert. " . mysqli_error ($db);*/
            }
            $title =($db, $_POST['title']);
            $your_notes_here = ($db, $_POST['yournoteshere']);
            $notes_insert = "Insert Into NotesKept (title, yournoteshere) VALUES ('$title', '$your_notes_here')";
            
            if (mysqli_query($db, $notes_insert)){
                echo "<br>Note added."
            } else {
                echo "<br>ERROR $notes_insert. " . mysqli_error($db);
            
            }
            print_r('<hr><h1>Notes Archive</h1>');
            
            $sql = "SELECT id, title, notes";
            $notesresult = $db->query($sql);
            
            if ($notesresult->num_rows > 0)  {
                while ($row = $notesresult->fetch_assoc()) {
                    echo "Title: " . $row["title"] . "<br>Title: " . $row["notes"] . "<br>Notes: ";
                }
                } else {
                    echo "No results to display.";
                }
                    $db->close();
                    
                    print_r('<hr> <a href="https://web-dev-demos-bmajor4.c9users.io/note.html">Back to Notes</a>')
                   print_r('<hr> <a href="https://web-dev-demos-bmajor4.c9users.io/note1.html">Back to Archive</a>') ;}
                    
}
            ?>
            
</section>
        
       <a href="../note.html">Notebook Keeper</a> 

       <script src="js/main.js"></script>

    </body>
</html>
