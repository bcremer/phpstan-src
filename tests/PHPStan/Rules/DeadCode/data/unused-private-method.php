<?php

namespace UnusedPrivateMethod;

class Foo
{

	private function doFoo()
	{
		$this->doFoo();
	}

	private function doBar()
	{
		$this->doBaz();
	}

	private function doBaz()
	{
		self::calledStatically();
	}

	private function calledStatically()
	{

	}

	private function __construct()
	{
		$this->staticMethod();
		self::anotherStaticMethod();
	}

	private static function staticMethod()
	{

	}

	private static function anotherStaticMethod()
	{

	}

	private static function unusedStaticMethod()
	{

	}

}

class Bar
{

	private function doFoo()
	{

	}

	private function doBaz()
	{
		$cb = [$this, 'doBaz'];
		$cb();
	}

	public function doBar()
	{
		$cb = [$this, 'doFoo'];
		$cb();
	}

}

class Baz
{

	private function doFoo()
	{

	}

	public function doBar(string $name)
	{
		$cb = [$this, $name];
		$cb();
	}

}
