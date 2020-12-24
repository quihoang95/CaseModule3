<?php
namespace App\Http\Repositories;


use App\Models\Customer;

class CustomerRepository implements RepositoryInterface
{
    protected $customerModel;
    public function __construct(Customer $customerModel)
    {
        $this->customerModel = $customerModel;
    }

    function getAll()
    {
        return $this->customerModel->get();

    }

    function findById($id)
    {
        return $this->customerModel->findOrFail($id);
    }

    function save($obj)
    {
        $obj->save();
    }

    function delete($obj)
    {
        $obj->delete();
    }
}
