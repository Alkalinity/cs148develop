<?php

include "top.php";

print '<table>';
    //now print out each record
//$query = file_get_contents('sql/q01.sql');
    $query = "SELECT DISTINCT fldCourseName FROM tblCourses INNER JOIN tblEnrolls on fnkCourseId = pmkCourseId WHERE tblEnrolls.fldGrade = 100 ";
    $columns = 1;
    
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 0, false, false);
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
include "footer.php";
?>


