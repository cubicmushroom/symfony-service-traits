<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 24/04/2016
 * Time: 18:09
 */

namespace CubicMushroom\Symfony\ServiceTrait;

use Symfony\Bundle\TwigBundle\TwigEngine;

/**
 * Class TemplatingAwareTrait
 *
 * Provides easy access to templating
 *
 * @package LIMTool\KeyFITBundle\ServiceTrait\Templating
 */
trait TemplatingAwareTrait
{
    // -----------------------------------------------------------------------------------------------------------------
    // Properties
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var TwigEngine
     */
    protected $templating;

    // -----------------------------------------------------------------------------------------------------------------
    // Getters and Setters
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param TwigEngine $templating
     *
     * @return $this
     */
    public function setTemplating(TwigEngine $templating)
    {
        $this->templating = $templating;

        return $this;
    }
}