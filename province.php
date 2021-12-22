<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<br><h2><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h2><br>";
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#413C69'><b>ลำดับ</b></td>
        <td bgcolor='#82B2B7'><b>จังหวัด</b></td>
        <td bgcolor='#4682B4'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#218B81'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#FFD700'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#FF4500'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#A52A2A'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#9C4B28'><b>ผู้เสียชีวิตรวม</b></td></font></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#FFEF90'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#A6E7FF'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#D6F4FF'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#FFFFED'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#B7ECEA'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#F5E1FD'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFDCF4'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#C1BBDD'>";
    echo $val->total_death;
    echo "</td>";
  }
  echo "</table><br>"; 

  echo "<center><b>วันที่อัปเดต</b></center>";
  echo $val->update_date;
  echo "</center>";
?>
