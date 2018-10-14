<?php
/**
 * @author Atwix Team
 * @copyright Copyright (c) 2018 Atwix (https://www.atwix.com/)
 * @package Atwix_CartCouponSample
 */

namespace Atwix\CartCouponSample\Setup;

use Atwix\CartCouponSample\Setup\SetupService\CreateCartPriceRuleService;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 */
class InstallData implements InstallDataInterface
{
    /**
     * Create Cart Price Rule Service
     *
     * @var CreateCartPriceRuleService
     */
    protected $createCartPriceRuleService;

    /**
     * InstallData constructor
     *
     * @param CreateCartPriceRuleService $createCartPriceRuleService
     */
    public function __construct(CreateCartPriceRuleService $createCartPriceRuleService)
    {
        $this->createCartPriceRuleService = $createCartPriceRuleService;
    }

    /**
     * @inheritdoc
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->createCartPriceRuleService->execute();
    }
}
