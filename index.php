<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Password Generator</title>
    </head>
        <body class="pt-5 " style="background-color: #001632;">
            <header class="container text-center">
                <h1 style="color: white;">Strong Password generator</h1>
                <h2 style="color: white;">Genera una password sicura</h2>
            </header>
              
            <main class="container">

            <form action="./index.php" method="GET" class="py-5 bg-white container rounded-3">
                    <div class="row mb-4 container d-flex align-items-center">
                        <label style="color: black;" for="passwordnumbers" class="col-sm-2 col-form-label">Choose the size of password</label>
                        <div class="col">
                            <input type="number" class="form-control" id="passwordnumbers"  name="passwordsize">
                        </div>
                            <button type="submit" class="btn btn-primary col">Generate Password</button>
                        <div>

            <?php

                    if (empty($_GET['passwordsize']))  {

                        
                     ?>    
                        <div class="alert alert-info" role="alert">
                                 Please select a number
                        </div>

                <?php        
                    } else {

                        include_once __DIR__ . '/functions.php';

                        $passwordsize = $_GET['passwordsize'];

                        $password = generateRandomPassword($passwordsize);

                       
                        
                        
                     } ?>

                <h2> 
                    <?php echo 'Password generated:' . ' ' . $password; ?></h2>    
                </form>

            </main>    
                

                
        </body>
</html>