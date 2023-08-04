<?php

require_once 'DatabaseInterface.php';

class RESTDb implements DatabaseInterface
{
    public function getOrders(): array
    {
        echo "Calling method" . __METHOD__;
        return [];
    }

    public function getOrderById(int $id)
    {
        echo "Calling method" . __METHOD__;

    }

    public function createOrder(array $data): bool
    {
        echo "Calling method" . __METHOD__ ;
        // TODO: Implement createOrder() method.
        return true;
    }

    public function updateOrder(int $id, array $data): bool
    {
        // TODO: Implement updateOrder() method.

        echo "calling method" . __METHOD__;
        return true;
    }
    public function DeleteOrder(int $id): bool
    {
        // TODO: Implement updateOrder() method.

        echo "calling method" . __METHOD__;
        return true;
    }
}