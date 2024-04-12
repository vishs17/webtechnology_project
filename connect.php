<?php
// database connection code
if(isset($_POST['name']))
{
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '','webtec');

    // get the post records
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];
    $gt = $_POST['gt'];

    // database insert SQL code
    $sql = "INSERT INTO webtec.form (Name, Address, Email, Payment, Total) VALUES ( '$name', '$address', '$email', '$payment', '$gt')";

    // insert in database 
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        $message=1;
?>
        <html>
        <head>
            <title>Form Data</title>
            <style>
                .box {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    padding: 30px;
                    text-align: center;
                    box-shadow: 0px 2px 4px 0px;
                    transition: transform 0.3s;
                    cursor: pointer;
                    font-family: 'Lobster', cursive;
                    font-size: 25px;
                    color: black;
                    margin: 20px;
                    width: 500px;
                }

                .redirect-button {
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 8px;
                }

                .redirect-button:hover {
                    background-color: #45a049; /* Darker Green */
                }
            </style>
        </head>
        <body><center>
            <div class="box">
                <p>Thank You for shopping!<br>Your order summary:</p>
                <p>Name: <?php echo $name; ?></p>
                <p>Address: <?php echo $address; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Mode of Payment: <?php echo $payment; ?></p>
                <p>Grand Total: <?php echo $gt; ?></p>
                <button class="redirect-button" onclick="window.location.href = 'homepage.html';">Go to Homepage</button>
            </div>
            </center>
        </body>
        </html>
<?php
    }
}
else
{
    echo "Are you a genuine visitor?";
}
?>
