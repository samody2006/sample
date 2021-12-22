<!doctype html>
<html>
<head>
    <title>
    Addition Table
    </title>
</head>
<body>

<h1> Addition Table </h1>
<table align="left" border="1" cellpadding="3" cellspacing="3">
    <?php
    for ($tablenum=1; $tablenum<=15; $tablenum++) {
        echo "<tr>";
        for ($value=1; $value<=12; $value++) {
            echo "<td>$tablenum + $value = ".$tablenum + $value."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

