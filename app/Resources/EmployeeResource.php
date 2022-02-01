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

    public function getPaginatedData()
    {
        return $this->model->paginate(15);
    }

    public function createEmployee(EmployeeRequest $request)
    {
        $this->model->create([
            'name'            => $request->get('name'),
            'age'             => $request->get('age'),
            'gender'          => $request->get('gender'),
            'willing_to_work' => $request->get('willing_to_work') ? '1' : '0',
            'languages'       => join(',', $request->get('language')),
        ]);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function update(int $id, EmployeeRequest $request)
    {
        $this->model->find($id)->update([
            'name'            => $request->get('name'),
            'age'             => $request->get('age'),
            'gender'          => $request->get('gender'),
            'willing_to_work' => $request->get('willing_to_work') ? '1' : '0',
            'languages'       => $request->get('language') ? join(',', $request->get('language')) : '',
        ]);
    }

    public function delete(int $id)
    {
        $this->model->find($id)->delete();
    }
}
