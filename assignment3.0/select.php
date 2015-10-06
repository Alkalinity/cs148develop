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
            <li><a href="queryOne.php">Query One</a> SELECT DISTINCT fldCourseName FROM tblCourses INNER JOIN tblEnrolls on fnkCourseId = pmkCourseId WHERE tblEnrolls.fldGrade = 100</li>
            <li><a href="queryTwo.php">Query Two</a> SELECT DISTINCT fldDays, fldStart, tblTeachers.fldLastName FROM tblSections INNER JOIN tblTeachers on pmkNetId = fnkTeacherNetId  WHERE fldLastName = 'Snapp'</li>
            <li><a href="queryThree.php">Query Three</a> SELECT DISTINCT fldCourseName, tblSections.fldDays, tblSections.fldStart FROM tblSections INNER JOIN tblCourses on pmkCourseId = tblSections.fnkCourseId INNER JOIN tblTeachers on pmkNetId = fnkTeacherNetId WHERE tblTeachers.fldLastName = 'Horton'</li>
            <li><a href="queryFour.php">Query Four</a> SELECT tblSections.fldCRN, tblStudents.fldLastName, tblStudents.fldFirstName
FROM (( tblSections
    INNER JOIN tblEnrolls on tblEnrolls.fnkCourseId = tblSections.fnkCourseId)
    INNER JOIN tblStudents on tblStudents.pmkStudentId = tblEnrolls.fnkStudentId)
    WHERE tblSections.fldCRN = '91954'</li>
            <li><a href="queryFive.php">Query Five</a> SELECT fldFirstName, fldLastName, COUNT(tblSections.fldSection) FROM tblTeachers INNER JOIN tblSections on pmkNetId = fnkTeacherNetId"</li>
            <li><a href="querySix.php">Query Six</a> SELECT fldFirstName, fldLastName, fldPhone, fldSalary FROM tblTeachers HAVING (fldSalary < AVG(fldSalary))</li>
        </ol>

        <footer><p>Samuel Pakulski</p></footer>
    </body>


