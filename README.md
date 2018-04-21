# API-PHP

User
	->Read   : url :  http://localhost/image/read.php (show json) or => http://localhost/getJson/get_user_list.php (decode json - > array php)
	->Create : url :  http://localhost/user/create.php?fullname=ThomasFiuLin&username=thomasfiulin&password=123456
	->Update : url :  http://localhost/user/update.php?userid=31&fullname=ThomasFiuLinLen&username=thomasfiulinlen&password=123456789
	->Delete : url :  http://localhost/user/delete.php?userid=32


Project 
	->Read   : url :  http://localhost/image/read.php (show json) or => http://localhost/getJson/get_project_list.php (decode json - > array php)
	->Create : url :  http://localhost/project/create.php?projectname=VPN&foldername=vpn&currentuser=rollerlarry     (call in action form)
	->Update : url :  http://localhost/project/update.php?projectid=204&projectname=SSCC&foldername=ssccr&currentuser=rollerlarry  (call in action form)
	->Delete : url :  http://localhost/project/delete.php?projectid=72


Image
	->Read   : url :  http://localhost/image/read.php (show json) or => http://localhost/getJson/get_image_list.php (decode json - > array php)
	->Create : url :  Image will been create when create project
	->Update : url :  Image will been update when update project
	->Delete : url :  http://localhost/image/delete.php?imageid=33

Image save : => /project/image/ foldername/datecreated/username/image.jpg

Let's run form to run create and update project => "formtest/..."
