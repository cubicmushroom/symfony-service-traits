<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 26/04/2016
 * Time: 18:13
 */

namespace CubicMushroom\Symfony\ServiceTrait;

use Symfony\Component\Routing\Router;

/**
 * Class RouterAwareTrait
 *
 * @package CubicMushroom\Symfony\ServiceTrait
 */
trait RouterAwareTrait
{
    /**
     * @var Router
     */
    protected $router;


    /**
     * @param Router $router
     */
    public function setRouter(Router $router)
    {
        $this->router = $router;
    }
}