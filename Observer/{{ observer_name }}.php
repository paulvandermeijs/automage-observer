<?php

declare(strict_types=1);

namespace {{ namespace }}\Observer;

use Magento\Framework\Event\{Observer, ObserverInterface};

class {{ observer_name }} implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        // Observer execution code...
    }
}
