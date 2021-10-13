<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
while(have_posts()):
the_post();
?>
<div class="entry">
<h2><?php the_title();?></h2>
	<div class="content">
		<?php the_content();?>
	</div>
</div>
<?php
endwhile;
// Issue was here you need to fix this
// No no no no this is the line next to be added

// Ok this is third line please add it here also
// why this changes are not showing up in the server
// This line is issue line
// Changes done my main
?>
</body>
</html>