<?php

namespace TokenReflection\Broker\TokenStreamStorage;

class MemoryTokenStreamStorage implements \TokenReflection\Broker\TokenStreamStorage
{

	/**
	 * @var array
	 */
	private $tokenStreams;

	/**
	 * @param string $filename
	 * @return bool
	 */
	public function has($filename)
	{
		return isset($this->tokenStreams[$filename]);
	}

	/**
	 * @param string $filename
	 * @return mixed
	 */
	public function get($filename)
	{
		if ($this->has($filename)) {
			return $this->tokenStreams[$filename];
		}
		return NULL;
	}

	/**
	 * @param type $filename
	 * @param mixed $object
	 */
	public function set($filename, $object)
	{
		$this->tokenStreams[$filename] = $object;
	}

}
