# Task1-Robot-Arm-Interface-
This project is done using NetBeans platform, XAMPP, and PhpMyAdmin.

The idea of the project is to create an interface where the user can adjust the degrees values for the six motors which the robot arm will move according to, and connect the interface to the database.

The interface contains six sliders, six textboxes for the motors, and two buttons: (Save) to send the values to the database table which called (motorsdegrees), and (play) to 
move the motors by changing the value 0 (off) in (playmotors) table to 1 (on).

The project folder contains 12 files:
1- ControlUserInterface.html -> the program interface.
2- motor1.php -> shows the last motor1 degree.
3- motor2.php -> shows the last motor2 degree.
4- motor3.php -> shows the last motor3 degree.
5- motor4.php -> shows the last motor4 degree.
6- motor5.php -> shows the last motor5 degree.
7- motor6.php -> shows the last motor6 degree.
8- .htaccess -> to process html file as php file.
9- robotarm database -> the database where the values are stored.
10- image for motorsdegrees table.
11- image for playmotors table.
12- the project as ZIP folder.

The database details:
1- motorsdegrees table contains 7 columns (id, motor1, motor2, motor3, motor4, motor5, motor6)
   (id) column is auto-increment and the six others columns contain the degrees values.
   
2- playmotors table conatin 2 columns (id, status)
    (id) column is auto-increment and (status) coulmn to store whether the motors are on or off.
    
   -------------------------------------------------------Edited by Marya AL-Zoreky---------------------------------------------------------------
