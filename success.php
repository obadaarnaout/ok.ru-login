<?php
require_once 'odnoklassniki_sdk.php';
if (!is_null(OdnoklassnikiSDK::getCode())){
    if(OdnoklassnikiSDK::changeCodeToToken(OdnoklassnikiSDK::getCode())){
        $current_user = OdnoklassnikiSDK::makeRequest("users.getCurrentUser", null); // Get User Data
        print_r($current_user);
    }
    else{
        print_r(OdnoklassnikiSDK::changeCodeToTokenTest(OdnoklassnikiSDK::getCode()));
    }
}
else{
	echo "<p>code is empty</p>";
}