<?php
/* Smarty version 3.1.30, created on 2020-03-04 17:58:52
  from "C:\xampp\htdocs\mesprojets\BanqueDuPeupleSamane\src\view\accueil\viewAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fde4cce0378_90951707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08681da53db1cb2f2996a45a6a0a14f646e43d9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\BanqueDuPeupleSamane\\src\\view\\accueil\\viewAdmin.html',
      1 => 1583340466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fde4cce0378_90951707 (Smarty_Internal_Template $_smarty_tpl) {
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
			<!-- <div class="col-md-6 col-xs-12" >
				<div class="panel panel-info">
					<div class="panel-heading">Liste des pays</div>
					<div class="panel-body">
						<table>
							<th>Identification</th>
							<th>Nom</th>
							<th>Latitude</th>
							<th>Lonfitude</th>
							<th>Action</th>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePays']->value, 'pays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pays']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getId();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getNom();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getLatitude();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getLongitude();?>
</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
					</div>
				</div>
			</div> -->
			<div class="col-md-12 offset-md-1" >
				<div><h2 style="color: green"><?php echo $_smarty_tpl->tpl_vars['succes']->value;?>
</h2></div>
				<div class="panel panel-info">
					<div class="panel-heading">Formulaire Ajout Personnel</div>
					<div class="panel-body">
						<form method="post" action="/mesprojets/BanqueDuPeupleSamane/User/insertUser">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Nom</label>
									<input class="form-control" type="text" name="nom" id="nom">
								</div>
								<div class="form-group col-md-6">
									<label>Prenom</label>
									<input class="form-control" type="text" name="prenom" id="prenom">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Adresse</label>
									<input class="form-control" type="text" name="adresse" id="adresse">
								</div>
								<div class="form-group col-md-6">
									<label>Telephone</label>
									<input class="form-control" type="text" name="telephone" id="telephone">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Email</label>
									<input class="form-control" type="text" name="email" id="email">
								</div>
								<div class="form-group col-md-6">
									<label>Salaire</label>
									<input class="form-control" type="text" name="salaire" id="salaire">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Login</label>
									<input class="form-control" type="text" name="login" id="login">
								</div>
								<div class="form-group col-md-6">
									<label>Password</label>
									<input class="form-control" type="text" name="password" id="password">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Profil</label>
									<select name="profil" class="form-control" id="profil">
											<option>Faite votre choix</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProfil']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									</select>
								</div>
								<div class="form-group col-md-6">
									<label>Agence</label>
									<select name="agence" class="form-control" id="agence">
											<option>Faite votre choix</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAgence']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value["nom"];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									</select>
								</div>
							</div>
							<div class="form-row">
								<input class="btn btn-success" type="submit" id="" name="valider" value="Ajouter"/>
								<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class=" col-xs-12" >
				<div class="panel panel-info">
					<div class="panel-heading">Liste des pays</div>
					<div class="panel-body">
						<table class="table tab-content d-table table-hover">
							<th>Nom</th>
							<th>Prenom</th>
							<th>Adresse</th>
							<th>Email</th>
							<th>Action</th>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value->getAdresse();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
