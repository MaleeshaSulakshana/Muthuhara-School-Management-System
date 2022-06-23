<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muthuhara preschool</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assests/css/admin/nav.css">
    
   
</head>

<style>
    .container {
	box-sizing: border-box;
	min-height: 100vh;
	overflow: hidden;
	position: relative;
	width: 100%;
	padding: 0;
	margin: 0;
}

.sidebarAdmin {
	position: relative;
	margin-top: 0;
	left: 0;
	width: 320px;
	min-height: 100vh;
	background-color: #042331;
	border-left: 10px solid #042331;
	transition: 0.5s;
	overflow: hidden;
}

.sidebarAdmin ul {
	position: relative;
	top: 0;
	left: 0;
	width: 100%;
}
.sidebarAdmin ul li {
	position: relative;
	width: 100%;
	left: 0;
	list-style: none;
	border-top-left-radius: 30px;
	border-bottom-left-radius: 30px;
}
.sidebarAdmin ul li:hover {
	background-color: #0e94d4;
}

.sidebarAdmin ul li a {
	position: relative;
	display: block;
	width: 100%;
	display: flex;
	text-decoration: none;
	padding-bottom: 5px;
	left: 5px;
}

.sidebarAdmin ul li a .icon {
	position: relative;
	display: block;

	min-width: 50px;
	height: 50px;
	line-height: 60px;
	text-align: center;
	font-size: 35px;
	left: 0;
	color: white;
}

.sidebarAdmin ul li a .icon ion-icon {
	font-size: 0.75em;
}

.sidebarAdmin ul li a .text {
	position: relative;
	display: block;
	color: white;

	font-size: 18px;
	letter-spacing: 2px;
	text-align: start;
	top: 20px;
}
/*
.sidebar-admin ul li:hover a::before{
    content:'';
    position:absolute;
    right:0;
    
    width:50px;
    height:50px;
    background-color: tomato;
    border-radius: 50%;S
}
*/

.adminMain {
	position: absolute;
	width: calc(100%-300px);
	left: 300px;
	min-height: 100vh;
	background-color: white;
	transition: 0.5s;
}

.adminTopbar {
	width: 100%;
	height: 60px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0 10px;
}

.adminToggle {
	position: relative;
	top: 0;
	left: 60px;
	width: 60px;
	height: 60px;
	/* background:darkgrey;*/
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 60px;
	cursor: pointer;
}

.adminToggleIcon {
	position: relative;
	color: black;
	left: 50px;
	height: 60px;
	width: 60px;
	font-weight: bold;
	font-size: 200px;
	cursor: pointer;
	display: flex;
	justify-content: center;
	align-items: center;
}

.adminToggleIcon ion-icon {
	font-size: 0.55em;
}
/*
.admin-topbar-user{
    position:relative;
    left:300px;
    min-width: 40px;
    height:40px;
    overflow:hidden;
    cursor:pointer;    
}

.admin-topbar-user-icon{
    position: absolute;
    top:0;
    left:calc(100%-900px);
    width:100%;
    height:100%;
    float:right;
    width:calc(100%-90%);
    font-size: 30px;
}
*/

.cart {
	box-sizing: border-box;
	background-color: white;
	position: relative;
	padding: 100px 50px 0px 0px;
}

.dash-button p {
	align-items: center;
	font-size: 18px;
	font-weight: 600;
	color: black;
}

.dash-button img {
	width: 100px;
	height: 100px;
}

.row .icon-dashboard {
	margin-bottom: 50px;
}

.form-body {
	box-sizing: border-box;
	border-radius: 10px;
	border: 1px solid black;
	margin-top: 25px;
	/* margin-bottom: 50px; */
	margin-right: 150px;
	padding-top: 25px;
	padding-left: 25px;
	padding-right: 25px;
	padding-bottom: 25px;
}

.form-body label {
	font-weight: 700;
}

.form-body table {
	border-collapse: collapse;
	box-shadow: 0 5px 10px rgb(184, 184, 184);
	background-color: white;
	text-align: center;
	overflow: hidden;
}

.form-body thead {
	box-shadow: 0 5px 10px rgb(184, 184, 184);
}

.form-body th {
	padding: 1rem 2rem;
	text-transform: uppercase;
	letter-spacing: 0.1rem;
	font-size: 12px;
	font-weight: 900;
	text-align: center;
}

.form-body td {
	padding: 1rem 2rem;
	text-align: center;
}

</style>
<body>