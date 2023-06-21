<!-- CUSTOM ERROR OPTINAL TASK -->
<h1>Try - Catch</h1>
<form action="#" method="get">
    <input type="text" name="custom" placeholder="Email">
    <input type="submit" value="Sumbit" name="submit_task1">
</form>
<?php
$custom_err = $_GET["custom"];
$email = $custom_err;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo $emailErr;
}
else {
    echo "Valid Email";
}
?>
<hr>

<!-- ERROR HANDELER OPTINAL TASK -->
<h1>All Error</h1>
<form action="#" method="get">
    <input type="number" name="err_value" placeholder="Input Number">
    <input type="submit" value="Submit" name="submit_task3">
</form>
<?php
function all_error($value)
{
    switch ($value) {
        case E_ERROR:
        case E_USER_ERROR:
            echo "Error";
            break;

        case E_WARNING:
        case E_USER_WARNING:
            echo "Warning";
            break;

        case E_NOTICE:
        case E_USER_NOTICE:
            echo "Notice";
            break;
        default:
            echo "Successful Submission";
            break;
    }
}
if ($_GET["submit_task3"]) {
    $error_variable = $_GET["err_value"];
    all_error($error_variable);
}

?>
<hr>

<h1></h1>