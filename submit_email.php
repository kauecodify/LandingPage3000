<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
     
        $file_path = "emails.txt";
        
        $file = fopen($file_path, "a");
        
        fwrite($file, $email . "\n");
        
        fclose($file);
        
        header("Location: {$_SERVER['HTTP_REFERER']}?success=true");
        exit;
    }
}

header("Location: {$_SERVER['HTTP_REFERER']}?error=true");
?>
