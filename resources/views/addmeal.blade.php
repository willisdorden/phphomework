@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meals</div>

                <div class="panel-body">
                    Add Another Meal
                    @include('common.errors')

                    <form action="/users/{{ Auth::user()->id }}/addmeal" method="Post" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="meal_name" class="col-sm-3 control-label">Meal Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="meal_name" id="meal-name" class="form-control">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Add Meal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
