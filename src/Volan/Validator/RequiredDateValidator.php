<?php
namespace \Volan\Validator;
class RequiredDateValidator extends DateValidator
{
	/**
	 * @return bool
	 */
	public function isRequired()
	{
		return true;
	}
}
