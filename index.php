<?php

include "func.php";


if ($p=="ajax")
	include "ajax.php";
else
	include "index.tpl.php";

