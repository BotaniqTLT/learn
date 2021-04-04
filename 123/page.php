
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
                  $title = "Заголовок страницы";
                  include_once "header.php";
                  echo "тело документа";
                  include_once "footer.php";

        ?>
