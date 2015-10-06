SELECT tblSections.fldCRN, tblStudents.fldLastName, tblStudents.fldFirstName
FROM (( tblSections
    INNER JOIN tblEnrolls on tblEnrolls.fnkCourseId = tblSections.fnkCourseId)
    INNER JOIN tblStudents on tblStudents.pmkStudentId = tblEnrolls.fnkStudentId)
    WHERE tblSections.fldCRN = '91954'
