<?php


namespace App\Resources;


use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeResource
{
    private $model;

    public function __construct(Employee $employee)
    {
        $this->model = $employee;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function createEmployee(EmployeeRequest $request)
    {
        $this->model->create([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'willing_to_work' => $request->get('willing_to_work') ? '1' : '0',
            'languages' => join($request->get('language')),
        ]);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }
}
