<?php
session_start();





if(isset ($_POST['email'])) {
 
   $name = $_POST['name'];
   $email = $_POST['email'];



   $user = $_SESSION['user'] = $_POST['user'];



   $email_message = "Form details below.\n
   Name: $name \n
   Email:$email\n
   UserName: $user";


   $email_subject = "Message from $name";


   $email_to ="wesley.d.mui@gmail.com";



   $headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();



   @mail($email_to, $email_subject, $email_message, $headers);






   mkdir($user);



   $fh = fopen ("$user/profile.txt", 'w') or die ("Failed to create file");


   $text = "$name \n $email \n $user";

   
   fwrite( $fh, $text) or die ("Could no write to file");

   
   fclose ( $fh);

   

   if ( $_FILES) {

     $image = $_FILES['photo']['name'];

     switch( $_FILES['photo']['type'] ) {

        case 'image/jpeg':
         $ext = 'jpg';
         break;

         case 'image/png':
          $ext = 'png';
          break;

         default:
         $ext = '';
         break;
   }


   if ($ext) {


   $n = "$user/image.$ext";
 

   move_uploaded_file( $_FILES['photo']['tmp_name'], $n);
 }
} else {
      echo "No image has been uploaded";
};

  header ('Location: confirmed.php');
}
?>