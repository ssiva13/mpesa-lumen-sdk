<?php
/**
 * Date 13/04/2023
 *
 * @author   Simon Siva <simonsiva13@gmail.com>
 */

namespace Ssiva\MpesaLumenSdk;

use Illuminate\Support\Facades\Facade;

class MpesaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'mpesa-daraja';
    }
}