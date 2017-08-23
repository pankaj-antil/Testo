<?php
$array = array(1, 5, 3, 4);
?>

<table>
<thead><tr><th>Number</th></tr></thead>
<tbody>
<?php foreach ($array as $num) : ?>
<tr><td><?= htmlspecialchars($num) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>