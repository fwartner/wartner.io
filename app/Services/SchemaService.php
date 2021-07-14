<?php

namespace App\Services;

use Spatie\SchemaOrg\Graph;
use Spatie\SchemaOrg\Schema;

class SchemaService
{
    /**
     * @return void
     */
    public static function buildSchema()
    {
        $graph = new Graph();

        $founder = $graph->person('fwartner')
            ->givenName('Florian')
            ->familyName('Wartner')
            ->alternateName('fwartner');

        $graph->aboutPage()
            ->url(url('/about'));

        $graph->localBusiness()
            ->name('wartner.io')
            ->email('florian@wartner.io')
            ->contactPoint(Schema::contactPoint()->areaServed('Worldwide'))
            ->paymentAccepted('Cash, Credit Card, Wire Transfer')
            ->logo(asset('logo/FW_Slant.png'))
            ->founder($founder);

        return $graph;
    }
}
