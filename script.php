<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = $_POST["strawberry"];
    $ras = $_POST["raspberry"];
    $appl = $_POST["apple"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $studint_id = $_POST["student_id"];
    $price_str = 5;
    $price_app = 2;
    $price_ras = 3;
    $price_total = 0;
    $number_s = $_POST["strawberry"];
    $number_r = $_POST["raspberry"];
    $number_a = $_POST["apple"];
};
$date = date("F j, Y, g:i a"); 


?>


<!-- index page -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Fruit Store Assignment</title>
</head>

<body>
    <strong>Dojo Fruit Store</strong>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Dojo Fruit Store!</h1>
            <p class="lead text-muted">Your dojo decided to buy fruits for all the students! Please use this app to tell us what you would like to have! Once we get your order, we'll charge your student account automatically.</p>
        </div>
    </section>
    <form action="" method="POST">
        <h4>What would you like to buy?</h4>
        <table>
            <thead>
                <tr>
                    <th>Fruit Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Strawberry</td>
                    <td>
                        <select name='strawberry'>
                            <option value='0'>0</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Raspberry</td>
                    <td>
                        <select name='raspberry'>
                            <option value='0'>0</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Apple</td>
                    <td>
                        <select name='apple'>
                            <option value='0'>0</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <h4>Your Information</h4>
        <div>
            <div>
                <label>First name</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div>
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
        </div>

        <div>
            <label>Your Student ID <span>(Optional)</span></label>
            <input type="text" name="student_id" placeholder="123-456-7890">
        </div>

        <hr>
        <input type="submit" value="submition">
    </form>


</body>

</html>



<!-- checkout page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout page</title>
</head>

<body>
    <h1>Thank you for your order!</h1>
    <p>We ordered 5 items for you and charged your student account on <?php echo $date?></p>
    <h4 class="mb-3">You have ordered</h4>
    <table>
        <thead>
            <tr>
                <th>Fruit Name</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Strawberry</td>
                <td><?php echo @$number_s; ?></td>
                <td>price is : <?php echo @$price_str * @$number_s, "$" ?></td>
            </tr>
            <tr>
                <td>Raspberry</td>
                <td><?php echo @$number_r; ?></td>
                <td>price is : <?php echo @$price_ras * @$number_r, "$" ?></td>
            </tr>
            <tr>
                <td>Apple</td>
                <td><?php echo @$number_a; ?></td>
                <td>price is : <?php echo @$price_app * @$number_a, "$" ?></td>
            </tr>
        </tbody>
    </table>
    <h4 class="mb-3">Your Information</h4>
    <div class="row">
        <div class="col-md-6 mb-3">
            First Name: <?php echo @$first_name;?>
        </div>
        <div class="col-md-6 mb-3">
            Last Name: <?php echo @$last_name; ?>
        </div>
    </div>

    <div class="mb-3">
        Your Student ID: <?php @$studint_id;?>
    </div>

    <hr class="mb-4">

</body>

</html>