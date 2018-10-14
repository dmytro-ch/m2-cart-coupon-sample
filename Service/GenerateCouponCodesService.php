<?php
/**
 * @author Atwix Team
 * @copyright Copyright (c) 2018 Atwix (https://www.atwix.com/)
 * @package Atwix_CartCouponSample
 */

namespace Atwix\CartCouponSample\Service;

use Magento\SalesRule\Model\CouponGenerator;

/**
 * Class GenerateCouponListService
 */
class GenerateCouponCodesService
{
    /**
     * Coupon Generator
     *
     * @var CouponGenerator
     */
    protected $couponGenerator;

    /**
     * GenerateCouponCodesService constructor
     *
     * @param CouponGenerator $couponGenerator
     */
    public function __construct(CouponGenerator $couponGenerator)
    {
        $this->couponGenerator = $couponGenerator;
    }

    /**
     * Generate coupon list for specified cart price rule
     *
     * @param int|null $qty
     * @param int|null $ruleId
     * @param array $params
     *
     * @return void
     */
    public function execute(int $qty, int $ruleId, array $params = []): void
    {
        if (!$qty) {
            return;
        }

        $params['rule_id'] = $ruleId;
        $params['qty'] = $qty;

        $this->couponGenerator->generateCodes($params);
    }
}
