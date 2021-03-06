<?php
/*
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Sonrisa\Component\Sitemap\Validators;

/**
 * Class IndexValidator
 * @package Sonrisa\Component\Sitemap\Validators
 */
class IndexValidator extends SharedValidator
{

    /**
     * @var \Sonrisa\Component\Sitemap\Validators\IndexValidator
     */
    protected static $instance;

    /**
     * @return SharedValidator
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     *
     */
    protected function __construct()
    {
    }

    /**
     * @param $lastmod
     * @return string
     */
    public static function validateLastmod($lastmod)
    {
        return self::validateDate($lastmod);
    }
}
