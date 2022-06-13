<?php
namespace CureDAO\Client\Units;
class ApplicationsUnit extends BaseUnit {

	const ABBREVIATED_NAME = 'applications';
	const ADVANCED = 1;
	const CATEGORY_ID = 13;
	const CATEGORY_NAME = 'Count';
	const COMBINATION_OPERATION = null;
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	const HINT = null;
	const ID = 14;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	const MINIMUM_VALUE = 0;
	const NAME = 'Applications';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Applications', 'applications', 'Application', 'application'];
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 1,
		],
	];
}
