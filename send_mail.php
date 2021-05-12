<?php
$to  = 'xybertrix.dev@gmail.com';

// subject
$subject = 'New Inquiry';
// message
$message = '
<html>
<head>
  <title>New Inquiry</title>
</head>
<body><h1>New Inquiry</h1>';

$message .= '<h3>Company Name - </h3><p>'.$_POST['compnay_name'].'</p>';
$message .= '<h3>Name of the Contact Person - </h3><p>'.$_POST['contact_person_name'].'</p>';
$message .= '<h3>Contact Number - </h3><p>'.$_POST['contact_number'].'</p>';
$message .= '<h3>Email Address - </h3><p>'.$_POST['email_address'].'</p>';
$message .= '<h3>Inquiry - </h3><p>'.$_POST['inquiry'].'</p>';

// $cart_data = json_decode($_SESSION['cart_products']);
// for ($i=0; $i < count($_SESSION['product']); $i++) { 
//     $item = json_decode($_SESSION['product'][$i]);
//     $message .= '<p>Product ID - '.$item[0].'</p>';
//     $message .= '<p>Product Name - '.$item[1].'</p>';
//     $message .= '<p>Quantity - '.$cart_data[$i]->total/$item[3].'</p>';
//     $message .= '<p>Total - Rs.'.$cart_data[$i]->total.'</p>';
//     $message .= '<hr>';
// }
// $total_amount = 0;
// for ($i=0; $i < count($cart_data); $i++) { 
//     $total_amount += $cart_data[$i]->total;
// }
// $message .= '<h3>Total Amount - Rs.'.$total_amount.'</h3>';

// $message .= '<h2>Ordered By</h2>
// <p>Name - '.$_POST['first__name'].' '.$_POST['last__name'].'</p>
// <p>Address - '.$_POST['address'].'</p>
// <p>Mobile - '.$_POST['mobile'].'</p>';

// $message .= '</body></html>';

echo $message;
$headers = array(
    'From' => 'xybertrix.dev@gmail.com',
    'MIME-Version' => '1.0',
    'Content-type' => 'text/html; charset=iso-8859-1'
);

// Mail it
mail($to, $subject, $message, $headers);

header("Location: index.html")