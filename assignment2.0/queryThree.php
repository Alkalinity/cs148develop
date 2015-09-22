<?php

//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";

print '<table>';
    //now print out each record
//$query = file_get_contents('sql/q01.sql');
    $query = "SELECT * FROM tblSections WHERE fldStart = ?";
    $data = array("13:10:00");
    $columns = 12;
    
    $info2 = $thisDatabaseReader->select($query, $data, 1, 0, 0, 0, false, false);
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
