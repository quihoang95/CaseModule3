<?php
namespace App\Http\Services;

use App\Http\Repositories\CustomerRepository;

class CustomerService implements ServiceInterface
{
    protected $customerRepository;
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    function getAll()
    {
        return $this->customerRepository->getAll();
    }

    function findById($id)
    {
        return $this->customerRepository->findById($id);
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
