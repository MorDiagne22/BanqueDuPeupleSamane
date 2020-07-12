<?php
/* Smarty version 3.1.30, created on 2020-03-04 18:49:42
  from "C:\xampp\htdocs\mesprojets\BanqueDuPeupleSamane\src\view\accueil\viewCompte.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fea36e2f3e3_04517952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b234bdc2ff5758ac1906bcf53b65d70967b9e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\BanqueDuPeupleSamane\\src\\view\\accueil\\viewCompte.html',
      1 => 1583343787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fea36e2f3e3_04517952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <?php echo '<script'; ?>
 src="http://localhost/mesprojets/BanqueDuPeupleSamane/public/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/mesprojets/BanqueDuPeupleSamane/public/js/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/mesprojets/BanqueDuPeupleSamane/public/js/script.js"><?php echo '</script'; ?>
>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
</head>
<body>
<div class="container" style="margin-top:60px;">
    <div class="nav navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
            <li><a href="/mesprojets/BanqueDuPeupleSamane/Menu/accueil">Accueil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Personnel/gestionPersonnel">Gestion Personnel</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/gestionOperation">Gestion Operation</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/gestionCompte">Gestion Compte</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/deconnexion">Deconnexion</a></li>
        </ul>
    </div>
</div>
</body>
</html><?php }
}
