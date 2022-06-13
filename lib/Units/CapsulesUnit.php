<?php
namespace CureDAO\Client\Units;
class CapsulesUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'capsules';
	const ADVANCED = 1;
	const CATEGORY_ID = 13;
	const CATEGORY_NAME = 'Count';
	const COMBINATION_OPERATION = null;
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	const HINT = null;
	const ID = 27;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 1000;
	const MINIMUM_VALUE = 0;
	const NAME = 'Capsules';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Capsules', 'capsules', 'Capsule', 'capsule'];
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 1,
		],
	];
}
