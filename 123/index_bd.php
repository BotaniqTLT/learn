
        <?php 
       /* $number_couter=5;
        $float= -3.25;
        $string ="Hellow world!";
        $bool = true;
            echo " nubner_couter = $number_couter";
            echo "<br/>";
            echo "переменная float= $float";
            echo "<br/>";
            echo "переменная string = $string";
            echo "<br/>";
            echo "переменная bool= $bool";
            echo "<br/>";
            $number_couter=12;
            echo " nubner_couter = $number_couter";*/
            
           /* echo PHP_VERSION;
            echo "<br/>";
            define("PI", 3.14);
            echo "<br/>";
            echo PI;
            echo "<br/>";
            echo defined("PI");*/

# урок 7 Арифметические операции
           /* $x=32;
            $y =22.13;
            $z=7;
            $summ= $x+$y;
            $diff=$x-$y;
            $mult= $x*$y;
            $dil=$x/$y;
            $ostatok =$x%$z;
            echo $summ;
            echo "<br/>";
            echo $diff;
            echo "<br/>";
            echo $mult;
            echo "<br/>";
            echo $dil;
            echo "<br/>";
            echo $ostatok;
            echo "<br/>";
            
            $q=400;
            $q /=10;
            echo $q;
            echo "<br/>";
            $q +=1;
            echo $q;
            echo "<br/>";
            $q++;
            echo $q; 
            echo "<br/>";
            $q--;
            echo $q; */

            # #8 - Строковые операции

           /* $str_1 = "<b>Первая строка</b> <input type=\"text\" /";
            $str_2 = "<i>Вторая строка</i>";
            echo $str_1." " .$str_2."\"\\";

            echo '\' ';*/
             # #9 - логические операции
          /*   $x =12;
             $y= 34;
             $z= 4.25;
             $bool_1 = $x != $z;
           
             $bool_2 = $x >= $z;
           //  echo $bool_1. "<br/>".$bool_2;
             $bool_3=!($x==$y);
             $bool_4= $x==$y || $z< $y;
             $bool_5 = $x!=$y && $z< $y;
             $bool = !($x !=$y && $z<$x)|| $x !=$y;
             echo "<br/> $bool = $x!=$y && $z< $y";*/
                   # #10 - операция эквиваленции
            /*$string= "example";
            $num = 0;
            $bool_1 = $string == true;
            echo "$bool_1 = $string === true";
            $bool_2 = $num =="";
            echo "<br/>$bool_2 = $num == \"\";<hr/>"; 
            $bool_3 = $string ===true;
            echo "$bool_3 = $string === true;";
            $bool_4 = $num == "";
            echo "<br/>$bool_4 = $num == \"\";";*/
                    # #11 - Условные операторы
          /*  $x=10;
            $y=5;  
                    if ($x == $y && $x != 12 && $y ==5 && ($x+5) == 15){
                      echo 'Все сработало'; }
                    else if ($x ==15 || $y !=7);
                      echo 'Все сработало 2'; 
                    }
                      
                    $x == $y ? $string ="Да" : $string ="Нет";
                    echo "<br/>" .$string;*/

                    #12 - Оператор Switch () case

                   /* $x =14;
                    switch ($x) {
                      case "Helo" : echo "Это строковая переменная"; break;
                      case 5 : echo "Это строковая переменная равна 5"; break;
                      case 7 : echo "Это строковая переменная равна 7"; break;
                      case 12 : echo "Это строковая переменная равна 12"; break;
                      default: echo "Это переменная неизвестна";
                                        };*/

                                        # #13 - Циклы For, While и Do While
                                        # цикл for
                   /*for ($i =100;  $i>=80; $i-=2)
                   {if($i % 5 == 0) continue;
                    if ($i<=87) break;
                     echo "цикл $i <br/>";
                   }           */
                    # цикл while
                /*   $x = 0;
                   while ($x<10) {
                    echo " итеррация под номером № $x <br/>";
                     if ($x ==7 )
                     for ($y=0; $y<5; $y +=3)
                     echo "Еще одна иттерациия $y <br/>";
                  
                    $x++;
                   }    */
                   # цикл  do while
               /*  $z =10;
                 do {
                  echo "операция выполнилась один раз <br/>";
                  $z++;
                 } while ($z< 12);          */
                 # #14 - Функции

               /*  function print_summ($summ, $x, $y){
                   math ($x, $y);
                   echo $summ;  }
                
                  function  math($first, $second) {
                    $summa =$first +$second;
                    return $summa;
                 }
                 $x=12;
                 $y=35;
                
                 $summ = math($x, $y);
                 print_summ($summ, $x, $y);*/

                 #  #15 - Массивы элементов
                 
                /* $array =array (12, -3.25, "string", true);
                 echo $array[1];
                 $array[1] = "string";
                 $array[2] = 4.5;
                 echo "<br/>". $array[1]."<br/>".$array[2];
                 $array[]="New Element";
                 echo "<br/>". $array[4];

                 for ($i =0; $i< count($array);$i++){
                   echo "Элемент массива с индеексом $i =".$array[$i]."<br/>" ;
                 }*/


                /* $list = array("age"=>12, "name" =>"Alex", "schoolBoy"=>true  );
                 $list["age"] =10;
                 $summa=0;
                 echo "<hr />".getAverage(array("first"=>12,"sec"=>45, "third"=>23, "forth"=>55));
                 function getAverage($array) {
                        foreach ($array as $key=> $value){
                          $summa += $value;
                          echo $key ."<br>"; 
                        
                        }
                        return $summa/count($array); 
                 }*/
                  #     #16 - Двумерные массивы
             /*    $array = array(array (12,4.46, "string", true), array ("examle"), array(45,"strong"));
                  
                  for  ($i = 0; $i < count($array); $i++)
                  {
                    for ($j =0; $j<count($array[$i]); $j++){
                      echo $array[$i][$j]."  ";
                    }
                    echo "<br/>";
                  }*/

                #    #17 - Область видимости переменных
               
               /* $x=10;
                echo "переменная x= $x <br/>";

                function test (){
                // $GLOBALS["x"] += 7;
                global $x;
                $x +=3;
                  echo "переменная Х= $x <br />";
                }
               test();*/
            /*   function test_2() {
                 static $id;
                 $id++;
                 echo $id. "<br />";
               }
                 for ($i=0; $i<10; $i++){
                   test_2();
                 }*/
                  #18 - Подключение файлов
              /*    $title = "Заголовок страницы";
                 include_once "header.php";
                  echo "тело документа";
                  include_once "footer.php";
                  include_once "page.php";*/
  # #19 обработка форм
    /* if (isset($_POST["doner"])){
          if($_POST["name"] == "")
            echo "Введите имя. <a '/learn/index.php'>исправить </a>"; 
else 
            header("location:index.php");
      }
        ?>
                  <html>
                 <header>
                 <title>обработка форм </title>

                 </header>


                 <body>

                 <form name ="test" action="" method ="post">
                   <label> Имя </label>  <br />
                    <input type ="text" name ="name" placeholder =" имя"> <br/><br />
                    <label> Email </label>  <br />
                    <input type ="text" name ="Email" placeholder ="email"> <br/><br />
                    <label> сообщение </label>  <br />
                    <textarea name="message" cols="40" rows="10"></textarea> <br /> <br />
                    <input type="submit" name="doner" value="готово"> </input>
                    </form> 
                   
                    </body>
                </html>*/

                 
                  ?>
                 
                     <?php 
                      
                ##20 - Функции для работы с типами
                /*$x=5;
                 if (isset($x) )  echo "переменная существует";
                else 
                echo "переменная  не существует";

                echo  "<br />";

                unset($x);
                if (isset($x) )  echo "переменная существует";
                else 
                echo "переменная  не существует <br />";
                echo  "<br />";
                $x="15";
                echo "IS numeric- ".is_numeric($x)."<br />";                 
                echo "IS integer- ".is_integer($x)."<br />";                 
                echo "IS double- ".is_double($x)."<br />";                 
                echo "Is string- ".is_string($x)."<br />"; 
                echo "Is boolean- ".is_bool($x)."<br />"; 
                echo "Is scalar- ".is_scalar($x)."<br />"; 
                echo "Is null- ".is_null($x)."<br />"; 
                echo "Is array- ".is_array($x)."<br />"; 
                echo "Type- ".gettype($x)."<br />"; */

               # #21 - Математические функции

            /*   echo M_PI."<br />";
               echo M_E."<br />";
               $x=-15;
               echo abs($x)."<br />";
               $y =49.405368;
               echo round($y,4);
               echo ceil($y)."<br />";
               echo floor($y)."<br />";
               echo mt_rand (1, 20)."<br />";
               echo min(12, 18, -5, 0, 28)."<br />";
               echo max(12, 18, -5, 0, 28)."<br />";
               $z=1;
               echo sin($z)."<br />";*/

                # #22 - Строковые функции

               /* $string ="This is example";
                echo strlen($string)."<br />";
                echo strpos($string, "is",4)."<br />";
                if (strpos($string, "T")=== false) 
                echo "T  не найдено";
                else
                echo "T  найдено";

                echo "<br/>".substr($string,3,-2);
                echo "<br/>".str_replace(array("is", "pre"), array("abc", "123" ),$string )."<br />";
                $str  = "<b> ХАХА, Жирный шрифт</b>";
                echo htmlspecialchars($str);
                 echo "<br />".strtolower($string)."<br />".strtoupper($string);
                 echo "<br />".md5("123"). "<br/>";
                 echo  trim("     String  5  5 ");*/


                # #23 - Функции для работы с массивами
                 /* $array = array(12,17,5,23,56);
                  echo count($array)."<br/>";
                  sort ($array);
                  print_r($array);
                  echo "<br />";
                  rsort($array);
                  print_r($array);
                  echo "<br/>";
                  asort($array);
                  print_r($array);
                  echo "<br/>";
                  arsort($array);
                  print_r($array);
                  echo "<br/>";

                  $allis =array("123"=>23, "12"=>45);
                  arsort( $allis);
                  print_r($allis);
                  echo "<br/>";
                  $allis =array("123"=>23, "12"=>45);
                  krsort( $allis);
                   
                  echo "<br/>";
                  shuffle($array);
                  print_r($array);
                  echo "<br/>";

                  echo in_array(12, $array);                  
                  echo "<br/>";

                  $arr_1 = array(10,2);
                  $arr_2 = array(4,5,3);

                  $array_3 = array_merge($arr_1, $arr_2);
                  print_r($array_3);
                  echo "<br/>";
                  $array_done =array(1,2,3,4,5,6,7);
                  print_r( $array_done);
                  echo "<br/>";
                  $array_done = array_slice($array_done, 1,2);
                  print_r( $array_done);*/


                            ##24 - Функции даты
                 /* $start = microtime(true);
                  echo time ()."<br/>";
                  echo microtime(true)."<br />";
                  echo "Время работы скрипта".(microtime(true)-$start)."секунд <br />";
                  $time =mktime(12,35,23,12,7,2007);
                  echo date ("Y-m-d H:i:s", $time);
                  echo "<br/>";
                  $array =getdate($time);
                  print_r($array);
                  echo "<br/>";
                  echo checkdate(2,28,2012);*/

                # #25 - Работа с файлами

               /* $file = fopen("a.txt","w");
                fwrite($file, "Example\nText\nNext");
                fclose($file);*/

               /*   $file = fopen("a.txt", "r+t");
                  while (!feof($file)){                  
                  echo fread($file,1)."</br>";
                        }
                        fseek ($file,0);
                        echo fread ($file,1);
                          fclose($file);
                          echo"-------------------------------------- <br/>";
                          file_put_contents("c.text", "TESR test test");
                          echo file_get_contents("c.text")."<br/>"; 
                          echo file_exists("c.text")."<br />"; 
                          echo filesize("c.text")."<br />"; 
                          rename("c.text", "b.text");
                          unlink( "b.text");*/
                        # #26 - Права доступа
                     /*   echo __FILE__;
                        echo "<br/>";
                        echo fileperms(__FILE__);
                        chmod(__FILE__,0777);*/
                        #27 - phpinfo() и $_SERVER
                   /*   echo  $_SERVER ['REMOTE_ADDR'];
                       phpinfo();*/

                       #28 - Создание редиректа
                     /*  header("Location:http://google.com");
                       exit;*/

                       #29 - Отправка почты на email
                      /* $message ="отправляю сообщение себе";
                       $to="BotaniQ.tlt@gmail.com";
                       $from="BotaniQ.tlt@gmail.com";
                       $subject="Тема сообщения";
                       $subject="=?utf-8?B?".base64_encode($subject)."?=";
                       $headers ="From: $from\r\nReplay-to: $from\r\nContent-type:text/plain; carset=utf-8\r\n";
                       mail($to, $subject,$message,$headers);*/
                     
                     
                       #30 - Работа с куки $_COOKIE                  
                        
                  /*   $num =(isset($_COOKIE["num"])) ? $_COOKIE["num"] :0;
                     $num++;
                     setcookie("num", $num, time () + 4);
                     echo" пользователь обновил страницу  $num раз";
                      /* if (isset ($_COOKIE["num1"]))
                            echo "Cookie установлена";
                        else
                            echo "Cookie не установлена";*/

                            #31 - Работа с куки $_SESSION

                     /*session_start();       
                    $num =(isset($_SESSION["num"])) ? $_SESSION["num"] :0;
                    $num++;
                    $_SESSION["num"]=$num;
                      
                   echo" пользователь обновил страницу  $num раз";  
                   session_destroy();*/


                   #32 - Форма обратной связи

/*

session_start();
if (isset ($_POST["send"])){
 $from=  htmlspecialchars($_POST["from"]);
 $to= htmlspecialchars($_POST["from"]);
 $subject=  htmlspecialchars ($_POST["subject"]);
 $message= htmlspecialchars ($_POST["message"]);
 $_SESSION["from"] =$from;
 $_SESSION["to"] =$to;
 $_SESSION["subject"] =$subject;
 $_SESSION["message"] =$message;
 $error_from = "";
 $error_to="";
 $error_subject="";
 $error_message="";
 $error=false;

    if ($from ==""|| !preg_match("/@/", $from))
    {
      $error_from = "Введите корректный e-mail";
      $error=true;
    }
    if ($to ==""|| !preg_match("/@/", $to))
    {
      $error_to = "Введите корректный e-mail";
      $error=true;
    }
    if (strlen($subject) == 0)
    {
      $error_subject= "Введите тему сообщения";
      $error=true; 
    }
    if (strlen ($message) ==0)
    {
      $error_message = "Введите тему сообщения";
      $error=true;
    }
    if ($error == false){
      $subject = "=?utf-8?B?".base64_decode($subject)."?=";
      $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

      mail($to,$subject,$message, $headers);
      header("Location:success.php?send=1");
      exit;
    }

}


<!---------- <!DOCTYPE html>
<html>
<head>

<title> Форма обратной связи </title>
</head>

<body>
      <h2> Форма обратной связи </h2>

    <form name="feedback" action=""  method ="post">
         <label> От кого: </label><br>
          <input type ="text" name ="from" value="<?=$_SESSION["from"]?>"> <br>
          <span style="color:red">  <?=$error_from ?> </span>
          <label> Кому: </label><br>
          <input type ="text" name ="to" value="<?=$_SESSION["to"]?>"> <br >
          <span style="color:red">  <?=$error_to ?> </span>
           <label> Тема </label><br>
           <input type ="text" name ="subject" value="<?=$_SESSION["subject"]?>"> <br >
           <span style="color:red">  <?=$error_subject ?> </span>
           <label> Сообщение </label><br>
           <textarea name="message" cols="30" rows="10"><?=$_SESSION["message"]?></textarea><br>
           <span style="color:red"><?=$error_message?></span><br>
                     <input type ="submit" name ="send" Value="отправить"/> <br>

      </form>
      
</body>                          
</html>*/
?>

<?php 
$mysqli = new mysqli ("localhost", "root", "","my_base");
$mysqli->query("SET NAME 'utf8'");

/*$success = $mysqli->query ("UPDATE `user` SET `reg_date` = '1610' WHERE `user`.`id` = 5") ;*/

for ($i=1; $i<10; $i++)
{
  $success = $mysqli->query ("INSERT INTO `user` (`login`, `password`, `reg_date`) 
  VALUES ('$i','".md5("$i")."','".time()."')");
}
  /*echo $success;

#$success = $mysqli->query ("UPDATE `user` SET `reg_date` = '10' WHERE `login` = '123' OR (`id` > 4 AND `id` < 8)") ;
#$success = $mysqli->query ("DELETE FROM `user` WHERE `user`.`id` > 2 AND `id`< 8 ");
//echo $success;*/
function printResult($result_set){
  while (($row =$result_set->fetch_assoc()) != false)
        {
            print_r ($row);
            echo "<br/>";
        }
        echo "-------------------------------------------------------<br/>";
}

/*for ($i=0; $i<10; $i++){
  $mysqli->query("INSERT INTO `user` (`login`, `password`, `reg_date`) 
  VALUES('user_$i', '".md5($i)."','".time()."')");


}*/

$result_set= $mysqli->query("SELECT * FROM `user`");
printResult($result_set);

$result_set= $mysqli->query("SELECT `id`, `login` FROM `user` 
WHERE `id` <=815 ORDER BY `id` DESC LIMIT 0,30");
printResult($result_set);


$result_set= $mysqli->query("SELECT `id`, `login` FROM `user` 
WHERE `login` LIKE '%ser%'");
printResult($result_set);

$result_set= $mysqli->query("SELECT COUNT( `id`) FROM `user`");
printResult($result_set);


$mysqli->close();
?>
     
