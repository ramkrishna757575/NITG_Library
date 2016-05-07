# NITG_Library
Online Library Portal for NIT Goa

This is a web project created for the Library of NIT Goa. This project was started to ease the process and increase the usage and 
productivity of the Library. At the current stage, people can use this to view the books available in the Library. Use the search 
functionality to find specific books.


This project requires the following to run:

Apache Version : 2.4.9<br/>
PHP Version : 5.5.12<br/>
MySQL Version : 5.6.17<br/>

The following file needs change:

NITG_Library\functions\db_login.php

In the above file, change the value of the following variables accroding to the configuration of your system:

  $db_hostname = 'localhost';   //change this to the hostname that your system is configured with<br>
	$db_username = 'root';        //change this to the user name, your system is configured for using MySql<br>
	$db_password = '';            //change this to the password, your system is configured for using MySql<br>
	$db_database = 'nitg_lib';	  //Use the Database name you wish to use for your project;<br>
	$db_table = 'books';          //DO NOT CHANGE THIS. THE PROJECT NEEDS SLIGHT CHANGES TO MAKE THIS VARIABLE FLEXIBLE.
