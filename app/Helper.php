<?php

namespace App;

use Request;

class Helper {
        
    /**
     * Method bodyClass
     *
     * @return string
     */
    public static function bodyClass() 
    {
        $body_classes = [];
        $class = "";
        if(is_array(Request::segments())){
            foreach ( Request::segments() as $segment ) {
                if ( is_numeric( $segment ) || empty( $segment ) ) {
                    continue;
                }
                $class .= ! empty( $class ) ? "-" . $segment : $segment;
                array_push( $body_classes, $class );
            }
            return ! empty( $body_classes ) ? implode( ' ', $body_classes ) : NULL;
        }else{
            return '';
        }
    }
}