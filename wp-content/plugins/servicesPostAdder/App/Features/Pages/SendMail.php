<?php
namespace App\Features\Pages;

use App\Http\Models\Mail;

class SendMail
{
  /**
   * Initialisation de la page.
   *
   * @return void
   */
  public static function init()
  {
    add_menu_page(
      __('Formulaire pour contacter les clients'), 
      __('Mail Client'),
      'edit_private_pages',
      'mail-client',
      [self::class, 'render'], // La méthode qui va afficher la page
      'dashicons-email-alt', // L'icon dans le menu
      26 // la position dans le menu (à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc).
    );
  }
  /**
   * Affichage de la page
   *
   * @return void
   */
  public static function render()
  {
    
    $mails = array_reverse(Mail::all());
    if (isset($_SESSION['old'])) {
      $old = $_SESSION['old'];
      unset($_SESSION['old']);
    }
    // on envoi notre variable $old qui contient les anciennes valeurs dans notre view send-mail pour qu'on puisse afficher son contenu dans les champs.
    view('pages/send-mail',compact('old', 'mails'));
  }
}