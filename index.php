<?php
      $timedate = array();
      $mestype = array();
      $allt = array();
      $coin=array();
      $i=0;
      $tet = array(); 
      $data = file("C:/Windows/Logs/DISM/dism.log");
      $size = count($data,COUNT_RECURSIVE);
      
      $z=0;
      
      while ($i <= $size){           //цикл по всем логам 
      $tm = 0;
      $tet = explode(" ", $data[$i]);
      
      
      while ($tm < 2){                     //цикл по датевремени
      $timedate[]= $tet[$tm];
      $tm++;
      }
      $allt[] = implode(" ", $timedate);   // делаем массив всех оставшихс€ элементом массива нового
      $timedate= array();                  // обнул€ем датуврем€
      
      if($tet[2]){
      $typ[]= $tet[2];                     // заносим второе поле
      } else {
          $typ[]= "-"; 
      }
      $siz= count($tet,COUNT_RECURSIVE);   //—„»“ј≈ћ ЁЋ≈ћ≈Ќ“џ ћј——»¬ј
      $n=20;
      
      if ($tet[$n] or $tet[$n+3]){                       //провер€ем существует ли элемент массива
      while ($n <= $siz){
          $mestype[] = $tet[$n];
          $n++;
          
      }} else {
          $mestype[]= "-";                  //если не существует заполн€ем прочерком, а то вс€ табличка скашиваетс€
       }
      $inall[] = implode(" ", $mestype);
      
      $mestype = array();                       //обнул€ем массив
      
       $i++; 
      }
     ?> <tr> <?
         for ($e=0; $e<$size; $e++) {
         echo "<tr>";
         echo "<td>" . $allt[$e] . "</td><td>" . $typ[$e] . "</td><td>" . $inall[$e] . "</td>";
         echo "</tr>";
     }?></tr><?
    
         