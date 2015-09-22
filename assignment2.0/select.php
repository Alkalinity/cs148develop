<html lang="en">
    <head>
        <title>Test site for SQL Statements</title>
        <meta charset="utf-8">
        <meta name="author" content="Samuel Pakulski">
        <meta name="description" content="Tables for classes for next semester">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">

    <body>        
        <h1>Assignment One - The Select Statement</h1>

        <ol>
            <li><a href="queryOne.php">Query One</a> SELECT pmkNetId FROM tblTeachers</li>
            <li><a href="queryTwo.php">Query Two</a> SELECT fldDepartment FROM tblCourses WHERE fldCourseName = "Introduction"</li>
            <li><a href="queryThree.php">Query Three</a> SELECT * FROM tblSections WHERE (fldStart = "1:10PM")</li>
            <li><a href="queryFour.php">Query Four</a> SELECT * FROM tblCourses WHERE (fldCourseName = "Database Design for the Web") </li>
            <li><a href="queryFive.php">Query Five</a> SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE 'r______o' </li>
            <li><a href="querySix.php">Query Six</a> SELECT fldCourseName FROM tblCourses WHERE (fldCourseName LIKE 'data') AND (fldDepartment NOT LIKE 'CS')
</li>
            <li><a href="querySeven.php">Query Seven</a> SELECT DISTINCT fldDepartment FROM tblCourses</li>
            <li><a href="queryEight.php">Query Eight</a> SELECT fldBuilding, fldSection FROM tblSections GROUP BY fldBuilding</li>
            <li><a href="queryNine.php">Query Nine</a> SELECT DISTINCT fldBuilding, fldNumStudents FROM tblSections WHERE fldDays LIKE '%W%' GROUP by fldBuilding ORDER BY fldNumStudents DESC</li>
            <li><a href="queryTen.php">Query Ten</a>SELECT DISTINCT fldBuilding, fldNumStudents FROM tblSections WHERE fldDays LIKE '%F%' GROUP by fldBuilding ORDER BY fldNumStudents DESC</li>
        </ol>

        <footer><p>Samuel Pakulski</p></footer>
    </body>


