@extends('app')
@section('something')
<div class="panel panel-default">
					<div class="panel-head">
						<h4 class="text-center">Student Form</h4><br />
						<a href="table.html">Show Data</a>
					</div>
                   <div class="panel-body">
                   	<div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>
                   	<div class="form-group">
                      <label for="number">Age:</label>
                      <input type="number" class="form-control" id="number" placeholder="Enter Age" name="age">
                    </div>
                    <div class="form-group">
                      <label for="class">Class:</label>
                      <input type="text" class="form-control" id="class" placeholder="Enter Your Class" name="class">
                    </div>
                    <div class="form-group">
                      <label for="roll">Roll:</label>
                      <input type="number" class="form-control" id="roll" placeholder="Enter Your Roll" name="roll">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="form-control bg-primary text-white" value="Submit">
                    </div>
                   </div>
                </div>
			</div>
			@endsection