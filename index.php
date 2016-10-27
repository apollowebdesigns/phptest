<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" />
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="container bodyimage">
    <h1>Hello Mamp</h1>
    <?php
        $dir = new DirectoryIterator(dirname(__FILE__));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                echo ($fileinfo->getFilename());
                echo ("<br>");
            }
        }
        
    ?>
  </body>
</html?
