@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{route('employee.store')}}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" class="form-control" name="name" value="{{$employee->name}}">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="age" id="age" value="{{$employee->age}}">
                </div>
                @csrf
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select required class="form-control" name="gender" id="gender">
                        <option value="">Select Gender</option>
                        @foreach(['male','female'] as $gender)
                        <option value="{{$gender}}" {{($gender==$employee)}}>Male</option>
                        @endforeach

                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Willing to work</label>

                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="willing_to_work" id="Yes">
                        <label class="form-check-label" for="Yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="willing_to_work" id="No" checked>
                        <label class="form-check-label" for="No">
                            No
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Languages</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="language[]" value="English" id="English">
                        <label class="form-check-label" for="English">
                            English
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="language[]" value="Hindi" id="Hindi">
                        <label class="form-check-label" for="Hindi">
                            Hindi
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection
