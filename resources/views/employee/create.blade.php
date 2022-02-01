@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Create an Employee</h2>
            <form method="post" action="{{route('employee.store')}}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age">
                </div>
                @csrf
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select required class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender">
                        <option value="">Select Gender</option>
                        @foreach(\App\Models\Employee::getGenders() as $gender)
                            <option value="{{$gender}}">{{ucwords($gender)}}</option>
                        @endforeach
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
                        <input required class="form-check-input" type="radio" name="willing_to_work" id="No">
                        <label class="form-check-label" for="No">
                            No
                        </label>
                    </div>

                    @error('willing_to_work')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Languages</label>
                    @foreach(\App\Models\Employee::getLanguages() as $language)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="language[]" value="{{$language}}"
                                   id="{{$language}}">
                            <label class="form-check-label" for="{{$language}}">
                                {{ucwords($language)}}
                            </label>
                        </div>
                    @endforeach
                    @error('language')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection
