<?php 
require 'partials/head.php'; 
require 'Task.php';
require 'functions.php';

$greeting="Hello, World";

$names=[
'John',
'Jeff',
'Jerry'
];

$person=[
	'name'=>'Jeffrey',
'age'=>31,
'hair'=>'brown',
'career'=>'web developer'
];

$task=[
'title'=>'Finish Homework',
'due'=>'today',
'assigned_to'=>'Jeffrey',
'completed'=>false
];

$results=[new Result('Go to the store'),
new Result('Finish up my screecast'),
new Result('clean my room')
];

$results[0]->complete();

$tasks= App::get('database')->selectAll('todos');

require 'input.php';
echo "<h1>Unset to remove elements from array</h1>";

unset($person['age']);

echo '<pre>';
var_dump($person);
echo '</pre>';

echo "<h1>Entry to the Party</h1>";
eligible(17);?>

<h1>Submit Your Name</h1>

<form method="POST" action="/users">
	<input type="text" name="name"></input>
	<button type="submit">Submit</button>
</form>
	
<?php require 'partials/footer.php'; 
?>