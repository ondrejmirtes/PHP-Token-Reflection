<?php

namespace TokenReflection\Broker\TokenStreamStorage;

use Nette\Caching\Cache;

class CachedTokenStreamStorage implements \TokenReflection\Broker\TokenStreamStorage
{

	/**
	 * @var \Nette\Caching\Cache
	 */
	private $cache;

	/**
	 * @param \Nette\Caching\Cache $cache
	 */
	public function __construct(Cache $cache)
	{
		$this->cache = $cache;
	}

	/**
	 * @param string $filename
	 * @return bool
	 */
	public function has($filename)
	{
		return isset($this->cache[$filename]);
	}

	/**
	 * @param string $filename
	 * @return mixed
	 */
	public function get($filename)
	{
		if ($this->has($filename)) {
			return $this->cache[$filename];
		}
		return NULL;
	}

	/**
	 * @param type $filename
	 * @param mixed $object
	 */
	public function set($filename, $object)
	{
		if ($this->has($filename)) {
			return;
		}
		$this->cache[$filename] = $object;
	}

}
