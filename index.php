<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Password Generator</title>
    </head>
        <body>
                <form action="./index.php" method="GET">
                    <input type="number" placeholder='Choose the size of password to generate' name="passwordsize">

                    <button type="submit">
                        Generate Password
                    </button>
                </form>

                

                <?php

                    if (empty($_GET['passwordsize'])) {
                        echo 'Please select a number';
                    } else {

                        $passwordsize = $_GET['passwordsize'];
                        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=[]{}|;:,.<>?';
                        $password = '';
                        
                        for($i = 0; $i < $passwordsize; $i++){

                            
            
                        }
                }
                    

                
                    
                ?>
        </body>
</html>