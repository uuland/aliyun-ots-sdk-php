<?php

namespace Aliyun\OTS;

/* 该类被使用于描述主键和属性列的数据类型。 */
class ColumnTypeConst
{
	const STRING = 'STRING';
	const INTEGER = 'INTEGER';
	const BOOLEAN = 'BOOLEAN';
	const DOUBLE = 'DOUBLE';
	const BINARY = 'BINARY';
	const INF_MIN = 'INF_MIN';
	const INF_MAX = 'INF_MAX';
	
	static public function values() {
		return array( ColumnTypeConst::BINARY, 
				ColumnTypeConst::BOOLEAN,
				ColumnTypeConst::DOUBLE,
				ColumnTypeConst::INTEGER,
				ColumnTypeConst::STRING,
				ColumnTypeConst::INF_MAX,
				ColumnTypeConst::INF_MIN
		);
	}
	
	static public function members() {
		return array(
			'ColumnTypeConst::BINARY',
			'ColumnTypeConst::BOOLEAN',
			'ColumnTypeConst::DOUBLE',
			'ColumnTypeConst::INTEGER',
			'ColumnTypeConst::STRING',
			'ColumnTypeConst::INF_MAX',
			'ColumnTypeConst::INF_MIN'
		);
	}
}
