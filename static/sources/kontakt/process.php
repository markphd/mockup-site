<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "email@example.se", "Kontakt form",
"Namn: $name\nEmail: $email\nTelefon: $phone\nMeddelande:\n $message\n",
"From: Forms <$email>" );
?>