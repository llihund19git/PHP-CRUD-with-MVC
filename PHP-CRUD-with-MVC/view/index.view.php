<?php require 'header.view.php'; ?>
	<h1>Users</h1>
	<ul>
		<?php foreach ($users as $user) : ?>
			<li>
				<a href="edit?id=<?= $user->getId(); ?>"><?= $user->getName(); ?></a> 
				<form method="POST" action="store" style="display:inline-block;">
					<input type="hidden" name="_method" value="_DELETE">
					<input type="hidden" name="id" value="<?= $user->getId(); ?>"/>
					<input type="checkbox" name="delete"/>
					<input type="submit" value="Delete"/>
				</form>
			</li>
		<?php endforeach ?>
	</ul>
	<hr>
	<h3>Add new User</h3>
	<form method="POST" action="store">
		<input name="name" type="text" required="required"/>
		<input value="Add" type="submit" />
	</form>
<?php require 'footer.view.php'; ?>