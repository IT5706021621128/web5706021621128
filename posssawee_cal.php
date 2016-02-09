<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Information </title>
  </head>
  <body>

    <?php
    $name=$_POST['name'];
    $nick=$_POST['nick'];
    $age=$_POST['age'];
    $day=$_POST['day'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $school=$_POST['school'];
    $faculty=$_POST['faculty'];
    $Branch=$_POST['Branch'];
    $year=$_POST['year'];
    echo "<p>";
    echo "<b> ข้อมูล User </b><br/>";
    echo "Name :: <i> $name </i><i> ($nick) </i><br/>";

    if ($age >= 0 && $age <= 100) {
      echo "Age :: <i> $age </i><br/>";
    }
    else {
      echo "Age :: <i> Error </i><br/>";
    }
    echo "day :: <i> $day </i><br/>";
    echo "email :: <i> $email </i><br/>";
    echo "phone :: <i> $phone </i><br/>";
    echo "school :: <i> $school </i><br/>";
    echo "faculty :: <i> $faculty </i><br/>";
    echo "Branch :: <i> $Branch </i><br/>";
    echo "year :: <i> $year </i><br/>";
     ?>

  </body>
</html>
