<?php
namespace App;
class Setup
{
  /**
   * Fonction pour démarrer une session afin de pouvoir utiliser la variable $_SESSION
   *
   * @return void
   */
  public static function start_session()
  {
    // on vérifie si une session n'existe pas déjà. Si non on en commence une
    if (!session_id()) {      
      // session_start() génère un ID accessible via session_id
      session_start();
    }
  }
  public static function enqueue_scripts($page)
  {
    // Cette css a été crée à partir des fichier scss de bootstrap en n'utilisant que la partie grid. Si vous essayez de reproduire cette action, sachez que j'ai du rajouter ceci manuellement *{box-sizing:border-box};
    wp_enqueue_style('admin-bootstrap-grid', RAT_PLUGIN_URL . "/resources/assets/css/bootstrap-grid.css");
  }
  public static function mailtrap($phpmailer){
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '844a534540907b';
    $phpmailer->Password = 'e9358305c0f022';
  }
} 