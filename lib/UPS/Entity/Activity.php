<?php

namespace UPS\Entity;


class Activity {
    public $Date;
    public $Time;

    function __construct( $response = null ) {
        if ( null != $response ) {
            if ( isset( $response->Date ) ) {
                $this->Date = $response->Date;
            }
            if ( isset( $response->Time ) ) {
                $this->Time = $response->Time;
            }
        }
    }
} 