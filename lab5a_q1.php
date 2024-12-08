<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Lab 5a Q1</title> 
</head> 
<body> 
<?php  
$name = "Mashitah binti Mohd Arifin"; 
$matricNumber = "CI220068"; 
$course = "Bachelor in Computer Science (Software Engineering) with Honours"; 
$yearOfStudy = "Year 3"; 
$address = "No 5 Jalan Melewar 1, Taman Melewar, 86400 Parit Raja, Johor"; 
?> 
<table border="1"> 
    <tr> 
        <td>Name</td> 
        <td><?php echo $name; ?></td>  
    </tr> 
    <tr> 
        <td>Matric Number</td> 
        <td><?php echo $matricNumber; ?></td>  
    </tr> 
    <tr> 
        <td>Course</td> 
        <td><?php echo $course; ?></td>  
    </tr> 
    <tr> 
        <td>Year of Study</td> 
        <td><?php echo $yearOfStudy; ?></td>  
    </tr> 
    <tr> 
        <td>Address</td> 
        <td><?php echo $address; ?></td>  
    </tr> 
</table> 
</body> 
</html>