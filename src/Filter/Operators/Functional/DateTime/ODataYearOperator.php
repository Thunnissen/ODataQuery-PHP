<?php
/**
 * Created by PhpStorm.
 * User: alexboyce
 * Date: 12/21/14
 * Time: 8:50 PM
 */

namespace ODataQuery\Filter\Operators\Functional\DateTime;



class ODataYearOperator extends ODataDateTimeFilter {
    public function __construct($property = NULL)
    {
        parent::__construct('year', $property);
    }
}