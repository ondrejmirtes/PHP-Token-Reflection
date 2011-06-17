<?php
/**
 * PHP Token Reflection
 *
 * Version 1.0 beta 3
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this library in the file LICENSE.
 *
 * @author Ondřej Nešpor <andrew@andrewsville.cz>
 * @author Jaroslav Hanslík <kukulich@kukulich.cz>
 */

namespace TokenReflection;

/**
 * Common reflection property interface.
 */
interface IReflectionProperty extends IReflection
{
	/**
	 * Returns a reflection of the declaring class.
	 *
	 * @return \TokenReflection\IReflectionClass
	 */
	public function getDeclaringClass();

	/**
	 * Returns the name of the declaring class.
	 *
	 * @return string
	 */
	public function getDeclaringClassName();

	/**
	 * Returns the appropriate docblock definition.
	 *
	 * @return string|boolean
	 */
	public function getDocComment();

	/**
	 * Returns the definition start line number in the file.
	 *
	 * @return integer
	 */
	public function getStartLine();

	/**
	 * Returns the definition end line number in the file.
	 *
	 * @return integer
	 */
	public function getEndLine();

	/**
	 * Returns property modifiers.
	 *
	 * @return integer
	 */
	public function getModifiers();

	/**
	 * Returns the property value for a particular class instance.
	 *
	 * @param object $object
	 * @return mixed
	 */
	public function getValue($object);

	/**
	 * Returns if the property was defined at compile time.
	 *
	 * @return boolean
	 */
	public function isDefault();

	/**
	 * Returns the property default value.
	 *
	 * @return mixed
	 */
	public function getDefaultValue();

	/**
	 * Returns the part of the source code defining the property default value.
	 *
	 * @return string
	 */
	public function getDefaultValueDefinition();

	/**
	 * Returns if the property is private.
	 *
	 * @return boolean
	 */
	public function isPrivate();

	/**
	 * Returns if the property is protected.
	 *
	 * @return boolean
	 */
	public function isProtected();

	/**
	 * Returns if the property is public.
	 *
	 * @return boolean
	 */
	public function isPublic();

	/**
	 * Returns if the property is static.
	 *
	 * @return boolean
	 */
	public function isStatic();

	/**
	 * Sets a property to be accessible or not.
	 *
	 * @param boolean $accessible If the property should be accessible.
	 */
	public function setAccessible($accessible);

	/**
	 * Sets value of a property for a particular class instance.
	 *
	 * @param object $object Class instance
	 * @param mixed $value Poperty value
	 */
	public function setValue($object, $value);

	/**
	 * Returns the string representation of the reflection object.
	 *
	 * @return string
	 */
	public function __toString();
}
