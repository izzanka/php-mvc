<?php 

namespace MVC\PHP\Controller;

class ProductController
{
    function categories(string $productId, string $categoryId): void
    {
        echo "productId : $productId, categoryId : $categoryId";
    }
}

?>