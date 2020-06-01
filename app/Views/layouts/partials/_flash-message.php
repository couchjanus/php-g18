<?php 
	if (Helper::isMessage()) {
		list($t, $msg) = Helper::isMessage();
		echo "<div class={$t}>{$msg}</div>";
	}
