<?php
declare(strict_types=1);
namespace oop\esempio1;

use oop\esempio1\ShopProduct;

/* listing 03.50 */
class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float  $price,
        int    $numPages
    ) {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base  = parent::getSummaryLine();
        $base .= ": page count - $this->numPages";
        return $base;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
/* /listing 03.50 */
