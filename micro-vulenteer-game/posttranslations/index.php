<?php
//mysqli_report(MYSQLI_REPORT_ALL);

$body = file_get_contents("php://input"); 
$data = array();
parse_str($body,$data);

$link = mysqli_connect('localhost', 'hack4good', 'geeklist', 'hack4good');

//* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* create a prepared statement */
if ($stmt = mysqli_prepare($link,  "INSERT INTO translations (captionId, userId, translation) VALUES (?, ?, ?)") ) {
    mysqli_stmt_bind_param($stmt, "sss", $data['captionId'], $data['user'], $data['translation']);

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* close statement and connection */
    mysqli_stmt_close($stmt);
} 



mysqli_query($link, "UPDATE user SET rating= rating+1 WHERE userId =" . $data['user']);
mysqli_close($con);

/* close connection */
mysqli_close($link);


?>