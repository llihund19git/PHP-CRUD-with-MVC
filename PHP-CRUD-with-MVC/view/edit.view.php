<?php require 'header.view.php'; ?>
	<h3>Update User</h3>
	<form method="POST" action="edit">
		<input name="id" type="hidden" value="<?= $user->getId(); ?>" >
		<input name="name" type="text" required="required" value="<?= $user->getName(); ?>"/>
		<input value="Update" type="submit" />
	</form>
<?php require 'footer.view.php'; ?>