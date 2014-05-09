<?php

namespace UPS\Entity;


class Resolution {
    public $Code;
    public $Description;

    function __construct( $response = null ) {
        if ( null != $response ) {
            if ( isset( $response->Code ) ) {
                $this->Code = $response->Code;
            }
        }
        if ( isset( $response->Description ) ) {
            $this->Description = $response->Description;
        }
    }
} 