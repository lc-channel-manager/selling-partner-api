<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class LockerDetails extends Dto
{
    /**
     * @param  ?string  $lockerNumber  Indicates the locker number
     * @param  ?string  $lockerAccessCode  Indicates the locker access code
     */
    public function __construct(
        public readonly ?string $lockerNumber = null,
        public readonly ?string $lockerAccessCode = null,
    ) {}
}
