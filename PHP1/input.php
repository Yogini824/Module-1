<header>
		<h1>
			<?= $greeting; ?>
		</h1>	
		</header>

		<h1>Array of Names</h1>
		<ul>
		<?php foreach($names as $name): ?>
			<li><?= $name; ?></li>
		<?php endforeach ?>
		</ul>
		
		<h1>Associative Arrays</h1>
		<ul>
		<?php foreach($person as $key=>$val): ?>
			<li><strong><?= ucwords($key)." : "; ?></strong><?= $val; ?></li>
		<?php endforeach ?>
		</ul>
		<ul>
		<li><strong>Name:</strong><?= $task['title']; ?></li>
		<li><strong>Due Date:</strong><?= $task['due']; ?></li>
		<li><strong>Person Responsible:</strong><?= $task['assigned_to']; ?></li>
		<li><strong>Status:</strong><?= $task['completed'] ? '&#9989;' : '&#10060;'; ?></li>
		</ul>

		<h1>Functions in classes</h1>
		<ul>
		<?php foreach($results as $result): ?>
			<li>
				<?php if($result->completed) : ?>
					<strike><?= $result->description; ?></strike>
						<?php else: ?>
							<?= $result->description; ?>
						<?php endif ?>
					</li>
		<?php endforeach ?>
		</ul>

		<h1>Fetching from Database</h1>
		<ul>

			<h1>My Tasks</h1>
		<?php foreach($tasks as $t): ?>
			<li>
				<?php if($t->completed) : ?>
					<strike><?= $t->description; ?></strike>
						<?php else: ?>
							<?= $t->description; ?>
						<?php endif ?>
					</li>
		<?php endforeach ?>
		</ul>

		<h1>All Users</h1>
		<?php foreach($users as $user): ?>
			<li><?= $user->name; ?></li>
			<?php endforeach ?>