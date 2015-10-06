<?php

include "top.php";

print '<table>';
//now print out each record
//$query = file_get_contents('sql/q01.sql');
$query = "SELECT * FROM tblStudents ORDER BY fldLastName, fldFirstName LIMIT 10";
$columns = 8;
//$testQuery= $thisDatabaseReader->testquery($query, "", 0, 1, 0, 0, false, false);
$info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
$highlight = 0; // used to highlight alternate rows
$fields = array_keys($info2[0]);
$labels = array_filter($fields, "is_string");
//print"<p><pre>";
//print_r($fields);
//print"</pre></p>";
print '<tr>';
foreach ($labels as $label) {
    $camelCase = preg_split('/(?=[A-Z])/', substr($label, 3));
        $message = '';
    foreach ($camelCase as $one) {
        $message .= $one . " ";
    }
    print '<th>' . $message . '</th>';
}
    print '</tr>';
foreach ($info2 as $rec) {

    for ($i = 0; $i < $columns; $i++) {
        print '<td>' . $rec[$i] . '</td>';
    }
    print '</tr>';
}

// all done
print '</table>';
include "footer.php";
?>


