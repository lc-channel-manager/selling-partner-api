<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class PurchaseShipmentResult extends Dto
{
    protected static array $complexArrayTypes = ['labelResults' => LabelResult::class];

    /**
     * @param  string  $shipmentId  The unique shipment identifier.
     * @param  ServiceRate  $serviceRate  The specific rate for a shipping service, or null if no service available.
     * @param  LabelResult[]  $labelResults  A list of label results
     */
    public function __construct(
        public string $shipmentId,
        public ServiceRate $serviceRate,
        public array $labelResults,
    ) {}
}
