<?php namespace Imvkmark\L5Sendcloud\Contracts;


interface Api {

	public function invalidStat($start, $end);

	public function bounces($start, $end, $limit = 100);

	public function deleteBounce($email);
}