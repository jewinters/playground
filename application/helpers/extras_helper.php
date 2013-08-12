<?php
	function display_errors($errors) {
		if(count($errors) > 0) {
			echo '<div class="alert alert-error">'.implode('<br />',$errors).'</div>';
		}
	}

	function display_messages($messages) {
		if(count($messages) > 0) {
			echo '<div class="alert alert-success">'.implode('<br />',$messages).'</div>';
		}
	}
?>