<!doctype html>
<html>
<head>
    <title>
    Factorial Table
    </title>
</head>
<body>

<h1> factorial Table </h1>
<table align="left" border="1" cellpadding="3" cellspacing="3">
    <?php
    
   function factorial($n) {
    if ($n == 1) {
        return 1;
    }

    return $n * factorial($n - 1 );
}
    for($tablenum=1; $tablenum<=15; $tablenum++)
    {
        echo "<tr>";
         $result = factorial ($tablenum);
        {
            
            echo "<td>$tablenum! = '$result'</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
