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
      
      while ($i <= $size){           //���� �� ���� ����� 
      $tm = 0;
      $tet = explode(" ", $data[$i]);
      
      
      while ($tm < 2){                     //���� �� �����������
      $timedate[]= $tet[$tm];
      $tm++;
      }
      $allt[] = implode(" ", $timedate);   // ������ ������ ���� ���������� ��������� ������� ������
      $timedate= array();                  // �������� ���������
      
      if($tet[2]){
      $typ[]= $tet[2];                     // ������� ������ ����
      } else {
          $typ[]= "-"; 
      }
      $siz= count($tet,COUNT_RECURSIVE);   //������� �������� �������
      $n=20;
      
      if ($tet[$n] or $tet[$n+3]){                       //��������� ���������� �� ������� �������
      while ($n <= $siz){
          $mestype[] = $tet[$n];
          $n++;
          
      }} else {
          $mestype[]= "-";                  //���� �� ���������� ��������� ���������, � �� ��� �������� �����������
       }
      $inall[] = implode(" ", $mestype);
      
      $mestype = array();                       //�������� ������
      
       $i++; 
      }
     ?> <tr> <?
         for ($e=0; $e<$size; $e++) {
         echo "<tr>";
         echo "<td>" . $allt[$e] . "</td><td>" . $typ[$e] . "</td><td>" . $inall[$e] . "</td>";
         echo "</tr>";
     }?></tr><?
    
         