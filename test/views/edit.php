<?php

require('../classes/Database.php');

require('../classes/News.php');

$config = require('../config.php');


$db = new Database($config);

$news = new News($db->getPdo());


$id = $_GET['id'];

$title = $_GET['title'];

$description = $_GET['description'];


?>

<!DOCTYPE html>


    <head>
        
        <?php if (isset($success_message)) : ?>

        <div class="success-message"><?= $success_message ?></div>

        <?php endif; ?>

            <title>Admin</title>

            <link rel="stylesheet" href="/public/css/style.css">

    </head>


    <body>

        <div id="edit-header">

            <h3 id="edit-heading">Edit News</h3>

            <form method="POST" action="/views/admin.php" id="edit-form">
                
                <input type="hidden" name="id" value="<?= $id ?>">

                <button id="cancel-edit">

                    <img src="/public/img/close.svg" alt="Cancel" class="icon">

                </button>

        </div>

            <input type="hidden" id="id" name="id" value="<?= $id ?>">
        
        <div>

        <input type="text" id="edit-title" name="title" placeholder="Title" value="<?= isset($title) ? htmlspecialchars($title) : '' ?>">

        <textarea id="edit-description" class="description" name="description" placeholder="Description"><?= isset($description) ? htmlspecialchars($description) : '' ?></textarea>


        </div>

        <div>

        <button type="submit" name="Save" id="edit-save-button">Save</button>

            <button type="submit" name="Logout">Logout</button>

        </div>
        
            </form>

        <script src="/public/js/editNews.js"></script>

    </body>
