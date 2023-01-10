<table class="table" >
    <tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Адрес</th><th>Возраст</th><th>Пол</th><th>Пол</th><th>Национальность</th><th>Номер</th></tr>
<?php
foreach($rows as $row) {
    echo "<tr><td>{$row['id']}</td><td>{$row['fam']}</td><td>{$row['im']}</td><td>{$row['otch']}</td><td>{$row['adress']}</td><td>{$row['vozrast']}</td><td>{$row['pol']}</td><td>{$row['pasport']}</td><td>{$row['nationality']}</td><td>{$row['nomer']}</td>";

}
?>
</table>