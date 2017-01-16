<?php
require_once "config/database.php";
require_once "controller/PostController.php";
require_once "model/Post_m.php";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo MVC</title>
    </head>
    <body>
        <?php
        if (isset($_GET['demo'])) {
            $controller = $_GET['demo'];
            switch ($controller) {
                case 'user':
                    $user = new PostController();
                    if (isset($_GET['method']) && $_GET['method'] == 'add') {
                        $user->add();
                    } else if (isset($_GET['method']) && $_GET['method'] == 'save') {
                        $user->save();
                    } else if (isset($_GET['method']) && $_GET['method'] == 'update') {
                        $user->GetUpdate();
                    } 
                    else {
                        $user->index();
                    }
                    break;
            }
        }
        ?>
        
    </body>
</html>
