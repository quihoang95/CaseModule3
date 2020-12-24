<?php
namespace App\Http\Repositories;

use App\Models\Order;

class OrderRepository implements RepositoryInterface
{
    protected $orderModel;

    public function __construct(Order $orderModel)
    {
        $this->orderModel = $orderModel;

    }

    public function getAll()
    {
        return $this->orderModel->get();
    }

    public function findById($id)
    {
        return $this->orderModel->findOrFail($id);
    }

    public function save($obj)
    {
        $obj->save();
    }

    function delete($obj)
    {
        $obj->delete();
    }
}
