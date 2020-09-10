<?php

declare(strict_types=1);

namespace Tests\Setono\SyliusCatalogPromotionPlugin\Application\Doctrine\ORM;

use Setono\SyliusCatalogPromotionPlugin\Doctrine\ORM\ProductVariantRepositoryTrait as CatalogPromotionProductVariantRepositoryTrait;
use Setono\SyliusCatalogPromotionPlugin\Repository\ProductVariantRepositoryInterface as CatalogPromotionProductVariantRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductVariantRepository as BaseProductVariantRepository;

class ProductVariantRepository extends BaseProductVariantRepository implements CatalogPromotionProductVariantRepositoryInterface
{
    use CatalogPromotionProductVariantRepositoryTrait;
}
