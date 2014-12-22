<?php
/**
 * Created by PhpStorm.
 * User: alexboyce
 * Date: 12/21/14
 * Time: 9:59 PM
 */

namespace ODataQuery\Filter\Operators\Logical;


class ODataOrOperator extends ODataLogicalOperator {

    public function __construct($property = NULL, $value = NULL) {
        parent::__construct($property, $value);
        $this->operator = 'or';
    }

    public function _and($value) {
        return new ODataAndOperator($this, $value);
    }

    public function _or($value) {
        return new ODataOrOperator($this, $value);
    }

    public function __toString() {
        $property = $this->property;
        $value = $this->value;
        $op = $this->operator;

        if ($property instanceof ODataConditionalInterface) {
            $property = "($property)";
        }
        if ($value instanceof ODataConditionalInterface) {
            $value = "($value)";
        }

        return "$property $op $value";
    }
}