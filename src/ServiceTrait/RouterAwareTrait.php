<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 26/04/2016
 * Time: 18:13
 */

namespace CubicMushroom\Symfony\ServiceTrait;

use Symfony\Component\Routing\RouterInterface;

/**
 * Class RouterAwareTrait
 *
 * @package CubicMushroom\Symfony\ServiceTrait
 */
trait RouterAwareTrait
{
    /**
     * @var RouterInterface
     */
    protected $router;


    /**
     * @param RouterInterface $router
     */
    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }
}