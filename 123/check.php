
        <?php 
        if ($_POST["name"] == "")
            echo "Введите имя. <a href='/learn/index.php'>исправить </a>"; 
else
            header("location:index.php");
        ?>
