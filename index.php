<?php
// Parms
$baseURI = 'https://www.linkedin.com/profile/add';  //don't change
$startTask = 'CERTIFICATION_NAME'; //don't change
$name = 'Vaibhav Yadavs';  // The name of Certificate
$organizationId = '1337'; // for linkedin
$issueYear = '2018'; // Enter Certificate issue Year
$issueMonth = '02';  // Enter Certificate issue Month
$expirationYear = '2020';  // Enter Certificate Expire Year
$expirationMonth = '03'; // Enter Certificate Expire Month
$certUrl = 'https://docs.microsoft.com/en-us/learn/certifications/d365-functional-consultant-sales';  // Enter Certificate Url
$certId = '1234';  // Certificate id
/* 
Code by
Vaibhav Yadav
Full Stack Developer 
(Surmount Soft)
Date : 17-07-2020
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LinkedIn Share</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("bg.png");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <br><br><br>
        <div class="row">
            <div class="col-6 offset-3" style="margin: auto;background: white; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);  border-radius: 5px; transition: 0.3s;">
                <div class="panel-heading">
                    <h1>LinkedIn Share</h1>
                    <p style="font-style: italic;">by Vaibhav Yadav</p>
                </div>
                <hr>
                <div>
                    <?php echo '<a href="'.$baseURI.'?startTask='.$startTask.'&name='.rawurlencode($name).'&organizationId='.$organizationId.'&issueYear='.$issueYear.'&issueMonth='.$issueMonth.'&expirationYear='.$expirationYear.'&expirationMonth='.$expirationMonth.'&certUrl='.rawurlencode($certUrl).'&certId='.$certId.'">'; ?>
                        <img src="https://download.linkedin.com/desktop/add2profile/buttons/en_US.png" alt="LinkedIn Add to Profile"></a></div>
                </div>
        </div>
    </div>
</body>
</html>