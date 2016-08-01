<?php /* Smarty version 2.6.30, created on 2016-08-01 09:47:49
         compiled from index.html */ ?>
<!Doctype>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $this->_tpl_vars['title']; ?>
</title>
		<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
	</head>
	<body ng-app="rubyPHP">
		<div class="container">
			<div class="row">
				<table class="table table-striped" ng-controller="mytable">
				   <caption><h1 class="text-center"><?php echo $this->_tpl_vars['world']; ?>
</h1></caption>
				   <thead>
					  <tr>
						 <th>名称</th>
						 <th>城市</th>
						 <th>密码</th>
					  </tr>
				   </thead>
				   <tbody>
					  <tr ng-repeat="x in datas">
						 <td>{{x.name}}</td>
						 <td>{{x.city}}</td>
						 <td>{{x.pwd}}</td>
					  </tr>
				   </tbody>
				</table>
			</div>
			<div class="row">
				<form action="addcity" method="post" class="form-horizontal" role="form">
				   <div class="form-group">
					  <label for="name" class="col-sm-2 control-label">名字</label>
					  <div class="col-sm-10">
						 <input type="text" class="form-control" id="name" name="name"
							placeholder="请输入名字" required>
					  </div>
				   </div>
				   <div class="form-group">
					  <label for="city" class="col-sm-2 control-label">城市</label>
					  <div class="col-sm-10">
						 <input type="text" class="form-control" id="city" name="city"
							placeholder="请输入城市" required>
					  </div>
				   </div>
				   <div class="form-group">
					  <label for="pwd" class="col-sm-2 control-label">密码</label>
					  <div class="col-sm-10">
						 <input type="password" class="form-control" id="pwd" name="pwd"
							placeholder="请输入密码" required>
					  </div>
				   </div>
				   <div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">添加</button>
					  </div>
				   </div>
				</form>
			</div>
		</div>
	</body>
	<script>
		/**
		 * 加载模型
		 */
		var rubyPHP = angular.module('rubyPHP', []);
		/**
		 * 加载控制器
		 */
		rubyPHP.controller('mytable', function($scope, $http) {
			$http.get("/getcities").success(function(response) {
				if(response.status == 200){
					$scope.datas = response.data;
				}
				$scope.names = response.records;
			});
		});
	</script>
</html>