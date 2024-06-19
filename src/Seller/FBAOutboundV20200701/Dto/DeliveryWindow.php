<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class DeliveryWindow extends Dto
{
    /**
     * @param  \DateTimeInterface  $startDate  Date timestamp
     * @param  \DateTimeInterface  $endDate  Date timestamp
     */
    public function __construct(
        public readonly \DateTimeInterface $startDate,
        public readonly \DateTimeInterface $endDate,
    ) {
    }
}
