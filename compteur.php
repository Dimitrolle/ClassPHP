<?php


class compteur
{
    private static $_compteur;

    /**
     * compteur constructor.
     */
    public function __construct()
    {
        self::$_compteur++;
    }


}