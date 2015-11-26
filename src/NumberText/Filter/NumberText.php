<?php
namespace NumberText\Filter;

use Zend\I18n\Filter\AbstractLocale;
use NumberText\Service\Soros;

class NumberText extends AbstractLocale
{

    /**
     * Filter number text
     *
     * @return string
     */
    public function filter($value)
    {
        $source = file_get_contents('./language/pt_BR.sor');
        $service = new Soros($source);

        return $service->run($value);
    }
}
