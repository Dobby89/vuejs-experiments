<?php
$json = array();

if ($_POST) {
    if (empty($_POST['name'])) {
        $json['error']['name'] = 'Name is required';
    }

    if (empty($_POST['email'])) {
        $json['error']['email'] = 'Email is required';
    }

    if (empty($_POST['message'])) {
        $json['error']['message'] = 'Message is required';
    }

    if (empty($json['error'])) {
        $json['success'] = 'Success. Form has been processed';
    } else {
        $json['errorMessage'] = 'Fix validation errors';
    }
}

echo json_encode($json);
?>