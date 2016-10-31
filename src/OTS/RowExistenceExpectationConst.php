<?php

namespace Aliyun\OTS;

/* 该类用于描述对于数据行是否存在的期望值。 */
class RowExistenceExpectationConst
{
	const IGNORE 			= 'IGNORE';
	const EXPECT_EXIST 		= 'EXPECT_EXIST';
	const EXPECT_NOT_EXIST 	= 'EXPECT_NOT_EXIST';
	
	static public function values() {
		return array( RowExistenceExpectationConst::IGNORE,
				RowExistenceExpectationConst::EXPECT_EXIST,
				RowExistenceExpectationConst::EXPECT_NOT_EXIST
		);
	}
	
	static public function members() {
		return array( 
				'RowExistenceExpectationConst::IGNORE',
				'RowExistenceExpectationConst::EXPECT_EXIST',
				'RowExistenceExpectationConst::EXPECT_NOT_EXIST'
		);
	}
}