<?php
/* Smarty version 3.1.30, created on 2020-03-04 17:48:52
  from "C:\xampp\htdocs\mesprojets\BanqueDuPeupleSamane\src\view\operation\retraitDepot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fdbf453b3b7_90844263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db7d8eb4c0983179b59ba5ed9c6eddd4f980e71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\BanqueDuPeupleSamane\\src\\view\\operation\\retraitDepot.html',
      1 => 1583340521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fdbf453b3b7_90844263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
    <div><h2 style="color: green"><?php echo $_smarty_tpl->tpl_vars['succes']->value;?>
</h2></div>
    <div><h2 style="color: red"><?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>
</h2></div>
<div class="panel panel-info">

    <div class="panel-heading">Formulaire De Transaction</div>
    <div class="panel-body">
        <form method="post" action="/mesprojets/BanqueDuPeupleSamane/Compte/transaction">
        <!-- <form method="post" action=""> -->
           <div class="">
               <div class="form-group">
                   <label>Numero Compte</label>
                   <input class="form-control" type="text" name="numero" id="numero" required/>
               </div>
               <div class="form-group">
                   <label>Montant</label>
                   <input class="form-control" type="number" name="montant" id="montant" required/>
               </div>
               <div class="form-group">
               <label>Profil</label>
               <select name="transaction" id="typeTrans" class="form-control" REQUIRED/>
                   <option>Faite votre choix</option>
                   <option value="1">Dépot</option>
                   <option value="2">Retrait</option>
               </select>
           </div>
           </div>

           <div class="form-row">
               <input class="btn btn-success" type="submit" name="valider" value="Valider"/>
               <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
           </div>
       </form>
   </div>
</div>
</div>
</body>
</html><?php }
}
