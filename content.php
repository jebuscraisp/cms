<?php require_once("boilerplate.php"); ?>
<?php require_once("functions/functions.php"); ?>
<?php require_once("functions/validation_functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php

	find_selected_page();
    // This function runs the loop checks and makes data gathered with fetch() available.
?>


  <div id="navigation">
		<?php echo navigation($sel_subject, $sel_page); ?>
		<br />
		<?php
		if(isset($_POST)){
			$output  = "<h2 class=\"message\">";
			$output .= $_SESSION["message"];
			$output .= "</h2>";
			echo $output; }
		?>
		<a href="new_subject.php">+ Add a subject</a>
  </div>

  <div id="page">
		<?php if ($sel_subject) { ?>
	           <h2>Manage Subject</h2>
			   Menu name: <?php echo $sel_subject["menu_name"]; ?><br />
         <?php } elseif ($sel_page) { ?>
			<h2>Manage Page</h2>
			Menu name: <?php echo $sel_page["menu_name"]; ?><br />
		<?php } else { ?>
		 <h2 id="titulo">Welcome, Please Select a Subject</h2>
		<?php }?>
  </div>

<?php require("includes/footer.php"); ?>
