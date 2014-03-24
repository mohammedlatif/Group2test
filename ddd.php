<link type="text/css" rel="stylesheet" href="stylesheet.css"/>

<?php
echo '<p> hellow world</p>';

include 'config.php';
$query="select * from department";
$result=mysqli_query($link,$query);
echo '<table border="1">';
echo '<th>'.'ID'.'</th>'.'<th>'.'Name'.'</th>';
while($row=mysqli_fetch_array($result))
{echo'<tr>'.'<td>';
	echo $row{"id"};
	echo '</td>';
	echo '<td>';
	echo $row{"name"};
	echo '</td>'.'</tr>';
}
	echo '</table>';




?>
<script type="text/javascript" src="script.js">
</script>

mohammed
