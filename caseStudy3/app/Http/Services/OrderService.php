<?php
namespace App\Http\Services;

use App\Http\Repositories\OrderRepository;

class OrderService implements ServiceInterface
{
    protected $orderRepository;
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    function getAll()
    {
        return $this->orderRepository->getAll();
    }

    function findById($id)
    {
        return $this->orderRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }
}
