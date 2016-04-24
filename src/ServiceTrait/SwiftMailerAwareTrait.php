<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 24/04/2016
 * Time: 17:56
 */

namespace CubicMushroom\Symfony\ServiceTrait;


trait SwiftMailerAwareTrait
{

    /**
     * @var \Swift_Mailer
     */
    protected $mailer;


    /**
     * @param \Swift_Mailer $mailer
     *
     * @return $this
     */
    public function setMailer($mailer)
    {
        $this->mailer = $mailer;

        return $this;
    }
}