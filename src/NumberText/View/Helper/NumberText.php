<?php
namespace NumberText\View\Helper;

use Zend\View\Helper\AbstractHelper;
use NumberText\Filter\NumberText as Filter;

class NumberText extends AbstractHelper
{

    public function __invoke($value)
    {
        $filter = new Filter();

        return $filter->filter($value);
    }
}
