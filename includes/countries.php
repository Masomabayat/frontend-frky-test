<?php 
$checkoutCountries = [
	'fr' => [
		'250' => 'France',
		'56' => 'Belgique',
		'442' => 'Luxembourg',
		'756' => 'Suisse'
	],
	'de' => [
		'276' => 'Deutschland',
		'40' => 'Österreich',
		'756' => 'Schweiz',
	],	
	'en' => [
		'372' => 'Ireland',
		'752' => 'Sweden',
		'528' => 'Netherlands',
		'578' => 'Norway',
		'208' => 'Denmark',
		'246' => 'Finland',
	],	
	'it' => [
		'380' => 'Italia'
	],
	'uk' => [
		'826' => 'United Kingdom'
    ],
    'nl' => [
        '528' => 'Netherlands',
        '56' => 'België',
    ], 
    'es' => [
        '724' => 'Spain'
    ],
    'cz' => [
        '203' => 'Czech Republic'
    ],
	'no-fr' => [
		'56' => 'Belgique',
		'442' => 'Luxembourg',
		'756' => 'Suisse'
    ],
    	'fr-no-su' => [
		'250' => 'France',
		'56' => 'Belgique',
		'442' => 'Luxembourg',
	],
    	'de-no-su' => [
		'276' => 'Deutschland',
		'40' => 'Österreich',
	],	
];

function displayCountriesOptions($country, $default = ''){
	global $checkoutCountries;
	
	foreach($checkoutCountries[$country] as $key => $value){
	?>
	<option value="<?=$key?>" <?=($default != '' && $default == $key) ? ' selected' : '';?>><?=$value?></option>
	<?php 
	}									
}