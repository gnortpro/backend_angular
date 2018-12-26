@extends('layouts.master')

@section('content')

		<div ng-repeat="motnguoi in nhieunguoi" ng-init="motnguoi.hienra = true">
			<div class="container">
				<div class="card mb-20" ng-show="motnguoi.hienra" >
					<div class="card-header"><button class="btn btn-default" ng-click="changeDisplay(motnguoi)"><i class="fa fa-edit"></i></button></div>
					<div class="card-body">
						<p>Username: <% motnguoi.name %></p>
						<p>Email: <% motnguoi.email %></p>
						
					</div>
				</div>
				<div class="card sua" ng-show="!motnguoi.hienra">
					<div class="card-header"><button class="btn btn-info" ng-click="saveEditedUser(motnguoi)"><i class="fa fa-save"></i></button></div>
					<div class="card-body">
						<input type="hidden" ng-model="motnguoi.id">
						<p>Username: <input type="text" ng-model="motnguoi.name"></p>
						<p>Email: <input type="text" ng-model="motnguoi.email"></p>
						
					</div>
				</div>

			</div>
		</div>


@endsection