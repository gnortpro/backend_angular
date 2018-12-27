@extends('layouts.master')

@section('content')
<div ng-app="userApp" ng-controller="singlePageTest1">
<div class="container">
  <h2>Nav</h2>
  <p>Basic horizontal menu:</p>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/test1">List User</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/view_list_order">List Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/test3">Test 3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</div>
<div class="container">
	<div ng-view></div>
</div>
</div>
@endsection