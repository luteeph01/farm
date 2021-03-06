<!doctype html>
<html lang="en">
<?php
    require_once "includes/initialize.php";
?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="A Farm Care Application" />
	<meta name="keywords" content="Farmcare, Agricultural Inventory, Codefest, Farmz, Team Entwickler, Oseni Luthfulahi, Awwal Akanbi, Adeogun Oluwaseyi, Chuwkunonoso Okonji" />
	<meta name="author" content="Team Entwickler" />
	<!-- <link rel="shortcut icon" href="img/favicon.ico" /> -->
	<title>FarmZ - INVENTORY</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Common CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />
	<link rel="stylesheet" href="css/main.css" />

	<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
	<!-- Chartist css -->
	<link href="vendor/chartist/css/chartist.min.css" rel="stylesheet" />
	<link href="vendor/chartist/css/chartist-custom.css" rel="stylesheet" />


</head>
<body>

<!-- Loading starts -->
<div class="loading-wrapper">
	<div class="loading">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<!-- Loading ends -->

<!-- BEGIN .app-wrap -->
<div class="app-wrap">
	<!-- BEGIN .app-heading -->
	<header class="app-header">
		<div class="container-fluid">
			<div class="row gutters">
				<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-8">
					<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
						<i class="icon-arrow_back"></i>
					</a>
					<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
						<i class="icon-chevron-thin-left"></i>
					</a>
					<div class="custom-search hidden-sm hidden-xs">
						<!-- <i class="icon-magnifying-glass"></i> -->
						<!-- <input type="text" class="search-query" placeholder="Search ..."> -->
						<h1>FarmZ</h1>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-4">
					<ul class="header-actions">
						<li>
							<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
								<img class="avatar" src="img/avatar2.svg" alt="User Thumb" />
								<span class="user-name">Custom User</span>
								<i class="icon-chevron-small-down"></i>
							</a>
							<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
								<ul class="user-settings-list">
									<li>
										<a href="profile.html">
											<div class="icon">
												<i class="icon-account_circle"></i>
											</div>
											<p>Profile</p>
										</a>
									</li>
									<li>
										<a href="profile.html">
											<div class="icon red">
												<i class="icon-cog3"></i>
											</div>
											<p>Settings</p>
										</a>
									</li>
									<li>
										<a href="filters.html">
											<div class="icon yellow">
												<i class="icon-schedule"></i>
											</div>
											<p>Activity</p>
										</a>
									</li>
								</ul>
								<div class="logout-btn">
									<a href="login.html" class="btn btn-primary">Logout</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- END: .app-heading -->
	<!-- BEGIN .app-container -->
	<div class="app-container">
		<!-- BEGIN .app-side -->
		<aside class="app-side" id="app-side">
			<!-- BEGIN .side-content -->
			<div class="side-content ">
				<!-- BEGIN .user-profile -->
				<div class="user-profile">
					<a href="index.html" class="logo">
						<!-- <img src="img/unify.png" alt="Unify Admin Dashboard" /> -->
						<h3>FarmZ</h3>
					</a>
					<h6 class="location-name">San Francisco</h6>
				</div>
				<!-- END .user-profile -->
				<!-- BEGIN .side-nav -->
				<nav class="side-nav">
					<!-- BEGIN: side-nav-content -->
					<ul class="unifyMenu" id="unifyMenu">
						<li>
							<a href="dashboard2.html">
										<span class="has-icon">
											<i class="icon-flash-outline"></i>
										</span>
								<span class="nav-title">DashBoard</span>
							</a>
						</li>
						<li class="active selected">
							<a href="news.php">
										<span class="has-icon">
											<i class="icon-flash-outline"></i>
										</span>
								<span class="nav-title">News Feed</span>
							</a>
						</li>
						<li>
							<a href="todo.html">
										<span class="has-icon">
											<i class="icon-flash-outline"></i>
										</span>
								<span class="nav-title">Todo/Activities</span>
							</a>
						</li>
						<li>
							<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-adjust2"></i>
										</span>
								<span class="nav-title">Farm Services</span>
							</a>
							<ul aria-expanded="false">
								<li>
									<a href="dashboard2.html">Plants</a>
								</li>
								<li>
									<a href="dashboard2.html">Animals</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- END: side-nav-content -->
				</nav>
				<!-- END: .side-nav -->
			</div>
			<!-- END: .side-content -->
		</aside>
		<!-- END: .app-side -->

		<!-- BEGIN .app-main -->
		<div class="app-main">
			<!-- BEGIN .main-heading -->
			<header class="main-heading">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="page-icon">
								<i class="icon-laptop_windows"></i>
							</div>
							<div class="page-title">
								<h5>Plants and Animal Inventory</h5>
								<h6 class="sub-heading">Welcome!</h6>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .main-heading -->
			<!-- BEGIN .main-content -->
			<div class="main-content">


				<!-- Row start -->
				<div class="row gutters">
					<div class="col-md-12" id="alertDialog" style="display: none"></div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">Animals</div>
							<div class="card-body">
								<table id="animalTable" class="table table-inverse m-0">
									<thead id="animalTableHead">
                                    <?php
                                        $animalInventory = mysqli_query($database,"SELECT * FROM inventory WHERE type='Animal'");
                                        if(mysqli_num_rows($animalInventory)):
                                        ?>
									<tr>

										<th>#</th>
										<th>Name</th>
										<th>Quantity</th>
										<!-- <th>Username</th> -->
									</tr>
                                    <?php endif; ?>
									</thead>
									<tbody>
									<?php
                                        $animalInventory = mysqli_query($database,"SELECT * FROM inventory WHERE type='Animal'");
                                        if(mysqli_num_rows($animalInventory)):
                                            $i=0;
                                            while ($row = mysqli_fetch_assoc($animalInventory)):
                                                $i++;
                                    ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $i; ?>
                                                </th>
                                                <td>
                                                    <?php echo $row['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['quantity']; ?>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                            <div class="text-center" id="animalNoRecTxt"> No Record found</div>
                                    <?php endif; ?>
									</tbody>
								</table>

							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">Plants</div>
							<div class="card-body">
								<table class="table m-0" id="plantTable">
									<thead  class="thead-inverse" id="plantTableHead">
                                    <?php
                                        $plantInventory = mysqli_query($database,"SELECT * FROM inventory WHERE type='Plant'");
                                        if(mysqli_num_rows($plantInventory)):
                                        ?>
                                        <tr>
                                            <th>#</th>
                                            <th>Plant Name</th>
                                            <th>Quantity</th>
                                        </tr>
                                    <?php endif; ?>
									</thead>
									<tbody>
                                    <?php
                                    if(mysqli_num_rows($plantInventory)):
                                        $i=0;
                                        while ($row = mysqli_fetch_assoc($plantInventory)):
                                            $i++;
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $i; ?>
                                                </th>
                                                <td>
                                                    <?php echo $row['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['quantity']; ?>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                         <div class="text-center" id="plantNoRecTxt"> No Record found</div>
                                    <?php endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Row end -->
				<div class="form-row">

					<div class="form-group col-md-4">
						<label for="inputAnimalName" class="col-form-label">Animal</label>
						<select id="inputAnimalName" class="form-control" name="inputAnimalName">
							<option>Choose</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="inputAnimalQty" class="col-form-label">Quantity</label>
						<input type="number" class="form-control" placeholder="Quantity" id="inputAnimalQty">
					</div>
					<button id="addAnimal" onclick="addAnimal(this.id)" type="submit" class="btn btn-primary">Add</button>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputPlant" class="col-form-label">Plants</label>
						<select id="inputPlant" class="form-control">
							<option>Choose</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="inputQuantity" class="col-form-label">Quantity</label>
						<input type="number" class="form-control" placeholder="Quantity" id="inputQuantity">
					</div>
					<button id="btnAddPlant" type="submit" class="btn btn-primary" onclick="addPlant(this.id)">Add</button>
				</div>
			</div>
			<!-- END: .main-content -->
		</div>
		<!-- END: .app-main -->
	</div>
	<!-- END: .app-container -->
	<!-- BEGIN .main-footer -->
	<footer class="main-footer fixed-btm">
		Team Entwickler for Code Fest
	</footer>
	<!-- END: .main-footer -->
</div>
<!-- END: .app-wrap -->
<script>
    function loadingBtn(btnId,textVal,isLoading) {
        var button = $("body").find('#' + btnId);
        if(isLoading){
            //Animate Btn to loading
            button.html('<i class="fa fa-circle-o-notch fa-spin" style="color: #ffffff;"></i> '+ textVal);
            button.prop('disabled', true); // disable button
		}else{
            button.html(textVal);
            button.prop('disabled', false); // enable button
		}
    }

    function addPlant(btnId){
        var plantName            = document.getElementById('inputPlant').value;
        var plantQuantity        = document.getElementById('inputQuantity').value;
        //1 - plant 2- animal
        var data = {
            plantName   : 	plantName,
			quantity	:	plantQuantity,
			type	 	:   1
		};
        loadingBtn(btnId,'Adding Plant',1);
        setTimeout( function(){
            saveInventory(data,btnId)
        },1000);
    }

    function addAnimal(btnId){
        var animalName       = document.getElementById('inputAnimalName').value;
        var animalQty        = document.getElementById('inputAnimalQty').value;
        //1 - plant 2- animal
        var data = {
            animalName   : 	animalName,
            animalQty 	 :	animalQty,
            type	 	 :  2
        };
        loadingBtn(btnId,'Adding Animal',1);
        setTimeout( function(){
            saveInventory(data,btnId,data.type);
        },1000);
    }

    function showAlertBox(message,alertType) {
        var notificationBanner = $("#alertDialog");
        notificationBanner.show();
        var alertMsg; var jsScript;
        if(alertType==='success') {
            alertMsg = '<div class="alert alert-success text-center" >'+ message + '</div>';
            notificationBanner.html(alertMsg);
            removeNotification(notificationBanner);
		}else if(alertType==='failure') {
            alertMsg = '<div class="alert alert-danger text-center" >'+ message + '</div>';
            notificationBanner.html(alertMsg);
            removeNotification(notificationBanner);
		}
    }

    function removeNotification(notification) {
        window.setInterval(function () {
            notification.fadeOut().delay(2000);
        },5000)
    }

    function saveInventory(formData,btn,type) {
        var inventoryType = (type)===2  ? "Animal" : "Plant";
        $.ajax({
            url: "ajax/saveInventory.php",
            method: "POST",
            tryCount : 0,
            retryLimit : 3,
            data: formData,
            success: function (response) {
                loadingBtn(btn,'Add',0);  //Enable Btn
                response = parseInt(response.replace(/^\s+|\s+$/g, ""));
                if(response===1){
                    showAlertBox(inventoryType+' added successfully','success');
                    addToUI(formData,type);
				}else{
                    showAlertBox('Error adding '+inventoryType,'failure');
				}
            },
            error: function () {
                this.tryCount++;
                if (this.tryCount <= this.retryLimit) {
                    //try again
                    $.ajax(this);
                    return ;
                }
                loadingBtn(btn,'Add',0);  //Enable Btn
                showAlertBox('Error adding'+inventoryType,'failure');
            }
        });
    }

    function addToUI(data,type) {
        //1 - plant 2- animal
		var table ; var newRowContent; var numberOfRows ; var tableHeadVal;
		if(type===2){
             table = $("#animalTable").find("tbody");
             //get number of table rows
             numberOfRows= table.children().length+1;
			 newRowContent = '<tr>' +
                 '<th scope="row">'+numberOfRows+'</th>' +
                 '<td>'+data.animalName+'</td>' +
                 '<td>'+data.animalQty+'</td></tr>';
            if(numberOfRows===1){
                $("#animalNoRecTxt").hide();
                tableHeadVal = '<tr>' +
                    '<th>#</th>' +
                    '<th>Name</th>' +
                    '<th>Quantity</th>' +
                    '</tr>';
                $("#animalTableHead").html(tableHeadVal);
            }
             table.append(newRowContent);
		}else{
            table = $("#plantTable").find("tbody");
            //get number of table rows
            numberOfRows= table.children().length+1;
            newRowContent = '<tr>' +
                '<th scope="row">'+numberOfRows+'</th>' +
                '<td>'+data.plantName+'</td>' +
                '<td>'+data.quantity+'</td></tr>';
            if(numberOfRows==1){
                $("#plantNoRecTxt").hide();
                tableHeadVal = '<tr>' +
                    '<th>#</th>' +
                    '<th>Plant Name</th>' +
                    '<th>Quantity</th>' +
                    '</tr>';
                $("#plantTableHead").html(tableHeadVal);
            }
            table.append(newRowContent);
		}
    }
</script>

<!-- jQuery first, then Tether, then other JS. -->
<script src="js/jquery.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendor/unifyMenu/unifyMenu.js"></script>
<script src="vendor/onoffcanvas/onoffcanvas.js"></script>
<script src="js/moment.js"></script>

<!-- Newsticker JS -->
<script src="vendor/newsticker/newsTicker.min.js"></script>
<script src="vendor/newsticker/custom-newsTicker.js"></script>

<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Slimscroll JS -->
<script src="vendor/sparkline/sparkline-retina.js"></script>
<script src="vendor/sparkline/custom-sparkline.js"></script>

<!-- Common JS -->
<script src="js/common.js"></script>
</body>
</html>