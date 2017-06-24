@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meals</div>

                <div class="panel-body">
                    Add The Food
                    @include('common.errors')

                    <form action="/addmeal/{{ Auth::user()->meals }}/foods" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="food_name" class="col-sm-3 control-label">Food Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="food-name" id="Food-name" class="form-control">
                            </div>
                        </div>