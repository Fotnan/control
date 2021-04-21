<?php
    $now=new DateTime();
    $now1=$now->format('Y-M-d')
?>
<table>
    <table border="1">
        <caption>Список задач технического отдела на <?= $now1 ?></caption>
        <tr>
            <th>№ п/п</th>
            <th>Объект</th>
            <th>Инициатор</th>
            <th>Дата</th>
            <th>Проблема</th>
            <th>Контакт</th>
            <th>Телефон</th>
            <th>Приоритет</th>
            <th>Примечание</th>
            <th>Когда выполнить</th>
            <th>Дата звонка</th>
            <th>Дата документа</th>
            <th>Документ наименование</th>
            <th>Дата выполнено</th>
            <th>Отметка</th>
        </tr>
	    <?php
		    foreach ($dannye as $row){
		        $start=$row['Datastart'];
		        $due=$row['Datadue'];
		        $tel=$row['Datatel'];
		        $send=$row['Datasend'];
		        $end=$row['Datamake'];
			    
			    $mmm=$row['MessageID'];
			
			    $initiator = \app\models\Init::find()
				    ->where(['id' => $row['InitID']])
				    ->one();
			    $problem = \app\models\Problem::find()
				    ->where(['id' => $row['ProblemID']])
				    ->one();
			    $priority = \app\models\Priority::find()
				    ->where(['id' => $row['PriorityID']])
				    ->one();
			    $mess = \app\models\Message::find()
                    ->where(['id' => $row['MessageID']])
                    ->one();
			    if (isset($mmm)){
				    $message = $mess['Message'];
                }else{
			        $message= ' ';
                }
			    
			    $date1 = new DateTime("$start");
			    $date2 = new DateTime("$due");
			
			    $diff = date_diff($date1, $date2);
			    $diff1 = date_diff($date1, $now);
			    $diff4 = date_diff($date2, $now);
			    
			    $res=$diff->format("%d");
			    $res1=$diff1->format("%d");
			    $res4=$diff4->format("%d");
        
                if ($date2<$now And isset($due)) {

	                    $stl='style="background-color: red; color: white;"';

                }elseif ($res1>5 And !isset($due)){
	                $stl='style="background-color: red; color: white;"';
                }
                else{
	                $stl='style="background-color: green; color: white;"';
                }

		        $aht=$row['Ahtung'];
		        $f= $aht==1 ? '<span style="color: white">ВНИМАНИЕ!</span>' : '<span style="color: white">Норма</span>';
			    echo
                "<tr $stl>
                    <td>{$row['id']}</td>
                    <td>{$row['Object']}</td>
                    <td>{$initiator['Initiator']}</td>
                    <td>{$row['Datastart']}</td>
                    <td>{$problem['Problem']}</td>
                    <td>{$row['Customername']}</td>
                    <td>{$row['Customertel']}</td>
                    <td>{$priority['Priority']}</td>
                    <td>{$row['Memo']}</td>
                    <td>{$row['Datadue']}</td>
                    <td>{$row['Datatel']}</td>
                    <td>{$row['Datasend']}</td>
                    <td>$message</td>
                    <td>{$row['Datamake']}</td>
                    <td>$f</td> 
                    <td>$res4</td> 
                    <td>$res1</td> 
                  </tr>
                    ";
		    }
	    ?>
    </table>
</table>
<?php


  ?>

