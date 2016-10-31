<?php

namespace Aliyun\OTS;

/* 该类用于描述数据查询的返回结果的排列方式。 */
class DirectionConst {
    const FORWARD = 'FORWARD';
    const BACKWARD = 'BACKWARD';
    static public function values() {
        return array (
                DirectionConst::FORWARD,
                DirectionConst::BACKWARD 
        );
    }
    static public function memebers() {
        return array (
                'DirectionConst::FORWARD',
                'DirectionConst::BACKWARD' 
        );
    }
}