<?php
    include 'database_w.php';

    $ID = $_POST['id'];

    $fetchSql = "SELECT * FROM 太陽光電發電量s WHERE id = '{$ID}'";  
    
    $status = $connect->query($fetchSql);

    echo '<table border = "1" cellspacing = "1">';       // style = "border:1px #cccccc"
        echo '<tr align="center">';
        echo '<td>'.ID.'</td>';
        echo '<td>'.年度.'</td>';
        echo '<td>'.月份.'</td>';
        echo '<td>'.光電站名稱.'</td>';
        echo '<td>'.裝置容量.'</td>';
        echo '<td>'.發電量.'</td>';
        echo '<td>'.平均單位裝置容量每日發電量.'</td>';
        echo '</tr>';

    while($row = $status->fetch_array()){
        echo '<tr>';
        echo '<td align="center">'.$row['id'].'</td>';
        echo '<td align="center">'.$row['年度'].'</td>';
        echo '<td align="center">'.$row['月份'].'</td>';
        echo '<td>'.$row['光電站名稱'].'</td>';
        echo '<td align="right">'.$row['裝置容量'].'</td>';
        echo '<td align="right">'.$row['發電量'].'</td>';
        echo '<td align="right">'.$row['平均單位裝置容量每日發電量'].'</td>';
        echo '</tr>';
    }
    echo '</table>';

    $connect->close();
?>