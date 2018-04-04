<?php
namespace PropTypes;

class Schema extends \Volan\Volan {

	public function __construct(array $schema)
	{
		foreach ($schema as $key => $value) {
			if (is_array($value) && !array_key_exists('_type', $value)) {
				$schema[$key]['_type'] = 'array';
			}
		}

		parent::__construct(['root' => $schema]);
	}

	public function validate($arr) {
		$arr = json_decode(json_encode($arr), true);
		return parent::validate($arr);
	}

}