<?php

declare(strict_types=1);

namespace Tests\Dedi\SyliusSEOPlugin\Behat\Page\Shop;

class TaxonPage extends AbstractRichSnippetAwarePage
{
    public function getRouteName(): string
    {
        return 'sylius_shop_product_index';
    }
}
