{
	"timeout": -1,
	"operationParams": [
	{
		"name": "user",
		"value": {
		"cloudClass": "com.bmc.cloud.model.beans.User",
		"description": "Create user using ReST API",
		"firstName": "<?php echo $nama_depan?>",
		"lastName": "<?php echo $nama_belakang?>",
		"email": "<?php echo $email?>",
		"customFieldsObject": [
		{
			"cloudClass": "com.bmc.cloud.model.beans.CustomField",
			"name": "ctm_people.1000001437",
			"description": "TemplateName",
			"stringValue": "Cloud End User",
			"type": "String"
		}
		],
		"name": "<?php echo $username?>",
		"password": "plaintext:<?php echo $password?>",
		"primaryOrganization": "PT Mitra Integrasi Informatika",
		"foundationLocationObject": {
		"cloudClass": "com.bmc.cloud.model.beans.FoundationLocation",
		"name": "CL-HQ"
	}
},
"type": "com.bmc.cloud.model.beans.User",
"multiplicity": "1"
},	
{
	"name": "isRemote",
	"value": true,
	"type": "java.lang.Boolean",
	"multiplicity": "0..1"
}
],
"postCallout": "",
"callbackURL": "",
"preCallout": ""
}