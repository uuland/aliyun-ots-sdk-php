<?php

namespace Aliyun\OTS;

/* 该类表示比较运算符。 */
class ComparatorTypeConst {
    const EQUAL = 1;
    const NOT_EQUAL = 2;
    const GREATER_THAN = 3;
    const GREATER_EQUAL = 4;
    const LESS_THAN = 5;
    const LESS_EQUAL = 6;
    static public function values() {
        return array (
                ComparatorTypeConst::EQUAL,
                ComparatorTypeConst::NOT_EQUAL,
                ComparatorTypeConst::LESS_THAN,
                ComparatorTypeConst::LESS_EQUAL,
                ComparatorTypeConst::GREATER_THAN,
                ComparatorTypeConst::GREATER_EQUAL 
        );
    }
    static public function memebers() {
        return array (
                'ComparatorTypeConst::EQUAL',
                'ComparatorTypeConst::NOT_EQUAL',
                'ComparatorTypeConst::LESS_THAN',
                'ComparatorTypeConst::LESS_EQUAL',
                'ComparatorTypeConst::GREATER_THAN',
                'ComparatorTypeConst::GREATER_EQUAL' 
        );
    }
}