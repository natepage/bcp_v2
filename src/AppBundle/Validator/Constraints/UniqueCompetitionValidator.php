<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueCompetitionValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        dump($value);
    }
}