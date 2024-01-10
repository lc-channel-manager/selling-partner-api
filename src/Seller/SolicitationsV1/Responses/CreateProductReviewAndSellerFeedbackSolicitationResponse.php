<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateProductReviewAndSellerFeedbackSolicitationResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
