<h1>Наши специалисты</h1>
<p>
    <table>
        Всех сотрудников ветеринарного госпиталя объединяет самое главное – любовь к своим пациентам
        и стремление сделать их жизнь максимально здоровой.
        <tr>
            <td>Доктор</td>
            <td>Должность</td>
            <td>Специализация</td>
        </tr>
<?php

	foreach($data as $row) {
		echo '<tr>
                <td>'.$row['Doctor'].'</td>
                <td>'.$row['Position'].'</td>
                <td>'.$row['Specialization'].'</td>
              </tr>';
	}
	
?>
    </table>
</p>