<?php
namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Http\Models\Mail;

class MailController
{

  public static function send()
  {
    $email = sanitize_email($_POST['email']);
    $name = sanitize_text_field($_POST['name']);
    $firstname = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $header='Content-Type: text/html; charset=UTF-8';
    $mail = mail_template('pages/template-mail',compact('name','firstname','message'));
  
    if(wp_mail($email, 'Pour ' . $name, $mail, $header)) {
      $_SESSION['notice'] = [
        'status' => 'success',
        'message' => 'votre e-mail a bien été envoyé'
      ];

    } else {
      $_SESSION['notice'] = [
        'status' => 'error',
        'message' => 'Une erreur est survenue, veuillez réessayer plus tard'
      ];
    }
    // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
    wp_safe_redirect(wp_get_referer());
  }
}