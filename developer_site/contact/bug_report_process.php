<?php
  $errors = '';
  $ouremail = 'lead-dev@linux-paradise.co.uk';
  if(
    empty($_POST['system']) ||
    empty($_POST['os']) ||
    empty($_POST['browser']) ||
    empty($_POST['email'])  ||
     empty($_POST['subject']) ||
    empty($_POST['body']))
{
    $errors .= "\n Please fill in all fields.";
}
 
$email = strtolower($_POST['email']);
$subject .= "$system, $os, $browser: $_POST['subject']";
$body = trim($_POST['body']);
 
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
$to = $ouremail;
$headers = "From: $email\n";
$headers .= "Reply-To: $ouremail";
 
mail($to,$subject,$body,$headers);
 
//redirect to the 'contact' page
header('Location: ../contact.html');

?>
  <div id="main_content">
    <h2>Bug Reporting</h2>
    <form action="http://www.linux-paradise.co.uk/contact/bug_report_process.php" method="POST">
    <fieldset id="details">
      <label for="system">Computer Type</label>
      <select id="system" name="system">
        <option value="mac">Mac Desktop PC</option>
        <option value="IPad">IPad</option>
        <option value="IPhone">IPhone</option>
        <option value="Android tablet">Android tablet</option>
        <option value="Android phone">Android smartphone</option>
        <option value="PC">Desktop or laptop PC</option>
      </select>   
     <label for="os">Operating System</label>
     <select id="os" name="os">
        <option value="Windows">Windows XP, 7 or 8</option>
        <option value="IOS">Mac operating system (Lion etc)</option>
        <option value="unix">Unix (FreeBSD etc)</option>
        <option value="linux">Linux</option>
        <option value="a23">Android 2.3 'Gingerbread'</option>
        <option value="a4">Android 4 'Jellybean'</option>
    </select>
    <label for="browser">Web Browser</label>
    <select id="browser" name="browser">
      <option value="Internet Explorer">Internet Explorer 9 and above</option>
      <option value="Firefox">Firefox 6 and above</option>
      <option value="Safari">Safari</option>
      <option value="Opera">Opera on a PC</option>
      <option value="OPhone">Opera on a smartphone</option>
      <option value="Chrome">Chrome or Chromium</option>
      <option value="Abrowser">Default Android browser</option>
    </select>
    </fieldset>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="someone@example.com" />
    <label for="subject">Title</label>
    <input type="text" name="subject" id="subject" placeholder="Problem..." />
    
      <label for="body">Problem</label><textarea name="body" id="body" placeholder="Include screen size even if in inches/cm. Type problem details into here"></textarea>
      <input type="button" name="send-button" id="send-button" value="Send" />
    </form>
   </div>

