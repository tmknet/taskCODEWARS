<?php
/* 
odliczanie od ceny z vatem - vat = 200

*/
function excludingVatPrice( $price ) {
    if ( $price !== null ) {
        $vat = $price * ( 15 / ( 100 + 15 ) );
        $result = $price - $vat;
        return sprintf( "%.2f", $result );
    };

    return -1;
};
echo excludingVatPrice( 230 ); 