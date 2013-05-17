<?php

$to = "";

$topic = $_POST['topic'];
echo($topic);
$subject ="$topic";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$message = "

Hi! My name is $name.

$message

From $name 
Oh ya, my email is $email

";


$header = "$email";


mail($to, $subject, $message, $header)
  
  
  
  
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset='utf-8'/>
  <title>contact</title>
</head>
<body>
<h2>Contact</h2>
<form action="?" method="post">
  <ul>
    <li>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name"/>
    </li>
    <li>
      <label for="email">Email:</label>
      <input type="text" name="email" id="email"/>
    </li>
    <li>
      <label for="topic">Topic:</label>
      <select id="topic" name="topic">
        <option value="Ponies">Ponies</option>
        <option value="Mexicans">Mexicans</option>
        <option value="Weiner">Weiner</option>
      </select>
    </li>
    <li>
      <label for="message">Message:</label>
      <textarea id="message" name="message" cols="42" rows="9"></textarea>
    </li>
    <li><input type="submit" value="Submit"></li>
  </ul>
</form>
</body>
</html>