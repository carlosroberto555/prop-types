<?php
namespace Volan\Validator;
class DateValidator extends AbstractValidator
{
	public function isValid($date)
	{
		$d = \DateTime::createFromFormat('Y-m-d', $date);
		return $d && $d->format('Y-m-d') == $date;
	}
}