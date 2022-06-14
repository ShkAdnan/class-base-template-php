<?php
require_once "config/init.php";

//echo md5(uniqid(rand(), true));
 $template = new Template('templates/frontpage.php');
 $template->title = 'Front Page';
 $template->companyName = 'Sarzone';


 echo $template;