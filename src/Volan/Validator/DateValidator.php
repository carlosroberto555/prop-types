<?php
namespace \Volan\Validator;
class DateValidator extends AbstractValidator
{
    public function isValid($nodeData)
    {
		$d = \DateTime::createFromFormat('Y-m-d', $date);
		return $d && $d->format('Y-m-d') == $date;
    }
}