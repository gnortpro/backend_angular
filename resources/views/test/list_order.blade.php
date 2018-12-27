<table class="table table-hover table-responsive">
	<thead>
		<tr>
			<th>ID</th>
			<th>Order Code</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody ng-repeat="motorder in nhieuorder" ng-init="motorder.hienra=true">
		<tr ng-show="motorder.hienra">
			<td><% motorder.id %></td>
			<td><% motorder.order_code %></td>
			<td><% motorder.name %></td>
			<td><% motorder.phone %></td>
			<td><% motorder.email %></td>
			<td><button class="btn btn-default" ng-click="changeDisplay(motorder)"><i class="fa fa-edit"></i></button></td>
		</tr>
		<tr ng-show="!motorder.hienra" class="edit">
			<td><% motorder.id %></td>
			<td><input type="text" ng-model="motorder.order_code"></td>
			<td><input type="text" ng-model="motorder.name"></td>
			<td><input type="text" ng-model="motorder.phone"></td>
			<td><input type="text" ng-model="motorder.email"></td>
			<td><button class="btn btn-danger" ng-click="saveEdit(motorder)"><i class="fa fa-save"></i></button></td>
		</tr>


	</tbody>
</table>