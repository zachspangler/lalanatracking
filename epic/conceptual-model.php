<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conceptual Model | Lalana Tracking</title>
	</head>
	<body>
		<h4>PROFILE</h4>
		<ul>
			<li>profileId (primary key)</li>
			<li>companyId (foreign key)</li>
			<li>profileActivationToken</li>
			<li>profileFirstName</li>
			<li>profileLastName</li>
			<li>profileEmail</li>
			<li>profileHash</li>
			<li>profileSalt</li>
			<li>profileRole</li>
			<li>profileImage</li>
			<li>profileActive</li>
		</ul>
		<h4>COMPANY</h4>
		<ul>
			<li>companyId (primary key)</li>
			<li>companyName</li>
			<li>companyAddress</li>
			<li>companyCity</li>
			<li>companyState</li>
			<li>companyPostalCode</li>
		</ul>
		<h4>TASK</h4>
		<ul>
			<li>taskId (primary key)</li>
			<li>taskProfileId (foreign key)</li>
			<li>taskName</li>
			<li>taskDetail</li>
			<li>taskDueDate</li>
			<li>taskCompletionDate</li>
			<li>taskStatus</li>
			<li>taskLastUpdated</li>
			<li>taskVersion</li>
		</ul>
		<h4>ROLE</h4>
		<ul>
			<li>roleId (primary key)</li>
			<li>companyId (foreign key)</li>
			<li>roleName</li>
	</body>
</html>