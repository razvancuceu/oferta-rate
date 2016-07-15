<?php

$EmailFrom = "contact_site@carpatsoft.com";
$EmailTo = "office@carpatsoft.com";
$Subject = "Contact oferta";
$Name = Trim(stripslashes($_POST['Name']));
$Firma = Trim(stripslashes($_POST['Firma']));
$Site = Trim(stripslashes($_POST['Site']));
$Telefon = Trim(stripslashes($_POST['Telefon']));
$Email = Trim(stripslashes($_POST['Email']));
$Tip = Trim(stripslashes($_POST['Tipsite']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nume: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Firma: ";
$Body .= $Firma;
$Body .= "\n";
$Body .= "Site vechi: ";
$Body .= $Site;
$Body .= "\n";
$Body .= "Telefon: ";
$Body .= $Telefon;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Tip proiect: ";
$Body .= $Tip;
$Body .= "\n";

$Body .= "Mesaj: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
