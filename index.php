<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>
			boostore
		</title>
		
		<script src="js/angular.min.js" type="text/javascript" charset="utf-8">
		</script>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	</head>
	<body>
		<ul class=" nav-pills nav ">
			<li role="presentation" class="active">
				<a href="">
					IT
				</a>
			</li>
			<li>
				<a href="">
					计算机理论
				</a>
			</li>
			<li>
				<a href="">
					管理经营
				</a>
			</li>
			<li>
				<a href="">
					商业史传
				</a>
			</li>
			<li>
				<a href="">
					文学
				</a>
			</li>
			<li class=" search " style="float: right;">
				<div class="row">
					<div class="col-lg-10 clo-md-10 col-xs-10">
						<div class="input-group">
							<input type="text" class="form-control" aria-label="...">
							<div class="input-group-btn">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									搜索
									<span class="caret">
									</span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<a href="#">
											IT
										</a>
									</li>
									<li>
										<a href="#">
											计算机理论
										</a>
									</li>
									<li>
										<a href="#">
											管理经营
										</a>
									</li>
									<li>
										<a href="#">
											商业史传
										</a>
									</li>
									<li>
										<a href="#">
											文学
										</a>
									</li>
								</ul>
							</div><!-- /btn-group -->
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</li>
		</ul>
		<div class="container" ng-app='book'>
			<div class="row">
				<div class="col-lg-10 col-md-10 col-xs-10 book-middle" style='float: none;'>
					<div class="book-sort" >
						<ul class='sort-ul clearfix col-lg-11 col-md-11 col-xs-11' style="float: none;">
							<li>
								<a href="#/" id='sort-defult'>
									点击量
								</a>
							</li>
							<li>
								<a href="#/soled" id='soled'>
									销量
									<span class="glyphicon glyphicon-arrow-down">
									</span>
									<span class="glyphicon glyphicon-arrow-up" style='display: none;'>
									</span>
								</a>
							</li>
							<li>
								<a href="#/pubtime" id='pubtime'>
									出版时间
									<span class="glyphicon glyphicon-arrow-down">
									</span>
								</a>
							</li>
							<li>
								<a href="#/prcie" class="prcie">
									价格
									<span class="glyphicon glyphicon-triangle-top">
									</span>
								</a>
							</li>
						</ul>
					</div>
					
					<div ng-view></div>
					
				</div>
			</div>
		</div>
		<script src="js/jquery.js" type="text/javascript" charset="utf-8">
		</script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8">
		</script>
		<script src="js/angular-route.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/ngApp.js" type="text/javascript" charset="utf-8">
		</script>
		<script src="js/ngCtrl.js" type="text/javascript" charset="utf-8">
		</script>
		<script src="js/store.js" type="text/javascript" charset="utf-8">
		</script>
	</body>
</html>