<?php

namespace Aliyun\OTS;

/* 该类表示逻辑运算符。 */
class LogicalOperatorConst {
    const NOT = 1;
    const AND = 2;
    const OR = 3;
    static public function values() {
        return array (
                LogicalOperationConst::AND,
                LogicalOperationConst::OR,
                LogicalOperationConst::NOT 
        );
    }
    static public function memebers() {
        return array (
                'LogicalOperationConst::AND',
                'LogicalOperationConst::OR',
                'LogicalOperationConst::NOT' 
        );
    }
}