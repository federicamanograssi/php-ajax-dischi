 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/master.css">
     <title>PHP DISCHI</title>
 </head>
 <body>
    <!-- HEADER---- -->
    <header>
        <img src="img/logo_spotify.png" alt="logo Spotify">
    </header>

    <!-- MAIN------ -->
    <main>
        <div class="container-wrapped" id="root">

        <?php
            include __DIR__.'/database/database.php';
        ?>
            <!-- DISC SECTION START------- -->
            <div id="disc_section">
            <?php 
            foreach ($database as $single_album) {
                ?>
                <div class="card">
                    <img src="<?php echo $single_album['poster']?>" alt="<?php echo $single_album['title']?>">
                    <h2 class="title"><?php echo $single_album['title']?></h2>
                    <p><?php echo $single_album['author']?></p>
                    <p class="year"><?php echo $single_album['year']?></p>
                </div>    
                <?php }?>
            </div>

        </div>
    </main>

 </body>
 </html>