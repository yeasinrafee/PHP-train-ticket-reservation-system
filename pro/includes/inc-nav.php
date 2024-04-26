 
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
    </head>
    <body>
    <nav class=" font-bold py-5 px-10 bg-yellow-400">
        <div class="container-fluid">
            
            <ul class="nav navbar-nav">
                <li class="<?php echo $class == 'reg' ? 'active' : '' ?> ">
                    <a href="individual_reg.php">Sign Up</a>
                </li>
                <li class="<?php echo $class != 'reg' ? 'active' : '' ?>">

                    <a href="signin.php">Sign In</a>

                <li>
                    <a href="../">Go Back</a>
                </li>
            </ul>
        </div>

    </nav>
    </body>
    </html>