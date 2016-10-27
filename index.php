<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" />
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="container row bodyimage">
    <h1>Andy's working directory</h1>
    <div class="col s6">
        <div class="collection">
            <?php
                $dir = new DirectoryIterator(dirname(__FILE__));
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                        echo ("<a class='collection-item' href=");
                        echo ($fileinfo->getFilename());
                        echo (">");
                        echo ($fileinfo->getFilename());
                        echo ("</a>");
                    }
                }
            ?>
        </div>
    </div>
    <div class="col s6">
        
    </div>

  </body>
</html?
