<?php
$faculty = $_POST['faculty'];
$date = $_POST['date'];
$subject = $_POST['Subject'];
$to = $_POST['To'];

$title = $_POST['title'];

$name = $_POST['name'];
$studentid = $_POST['studentid'];
$Department = $_POST['Department'];


$desired = $_POST['desired'];
$because = $_POST['Because'];

$course1 = $_POST['course1'];
$section1 = $_POST['Section1'];
$course2 = $_POST['course2'];
$section2 = $_POST['Section2'];
$course3 = $_POST['course3'];
$section3 = $_POST['Section3'];
$course4 = $_POST['course4'];
$section4 = $_POST['Section4'];
$course5 = $_POST['course5'];
$section5 = $_POST['Section5'];
$course6 = $_POST['course6'];
$section6 = $_POST['Section6'];

$signature = $_POST['Signature'];
$advisor_signature = $_POST['AdvisorSignature'];

$advisor_comment = $_POST['adcomment'];

echo "<h1>General Request Form</h1>";
echo "Faculty $faculty<br>";
echo "Date $date<br><br>";
echo "Subject $subject<br>";
echo "To $to<br><br>";
echo "Student Name $title $name<br>";
echo "Student ID $studentid<br>";
echo "Department $Department<br>";
echo "Desired $desired<br>";
echo "Because $because<br><br>";
echo "Course $course1 <br>Section $section1<br>";
echo "Course $course2 <br>Section $section2<br>";
echo "Course $course3 <br>Section $section3<br>";
echo "Course $course4 <br>Section $section4<br>";
echo "Course $course5 <br>Section $section5<br>";
echo "Course $course6 <br>Section $section6<br><br>";
echo "Signature $signature<br><br>";
echo "Advisor's Comment $advisor_comment<br>";
echo "Advisor Signature $advisor_signature<br>";
?>
