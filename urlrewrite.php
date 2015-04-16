<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/newspaper/([0-9]+)/.*\$#",
		"RULE" => "ID=\$1",
		"ID" => "",
		"PATH" => "/newspaper-detail.php",
	),
);

?>