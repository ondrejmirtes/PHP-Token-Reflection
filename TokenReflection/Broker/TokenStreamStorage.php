<?php

namespace TokenReflection\Broker;

interface TokenStreamStorage
{

	/**
	 * @param string $filename
	 * @return bool
	 */
	public function has($filename);

	/**
	 * @param string $filename
	 * @return mixed
	 */
	public function get($filename);

	/**
	 * @param type $filename
	 * @param mixed $object
	 */
	public function set($filename, $object);

}
