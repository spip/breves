<?php

	// nom du test
	$test = 'sql/sql_types_tables_id';

	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';

	include_spip('base/connect_sql');

// Des tests
$essais['table_objet'] = array(
array('breves','breve'),
);

$essais['table_objet_sql'] = array(
array('spip_breves','breve'),
);

$essais['id_table_objet'] = array(
array('id_breve','breve'),
);


$essais['objet_type'] = array(
array('breve','breves'),
);

	// hop ! on y va
	$err = array();
	foreach($essais as $f=>$essai)
		$err = array_merge(tester_fun($f, $essai),$err);
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		echo ('<dl>' . join('', $err) . '</dl>');
	} else {
		echo "OK";
	}


