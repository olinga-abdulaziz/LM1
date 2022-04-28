<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay now</title>
</head>
<body>
    <section>
        <h1>Payout sheet</h1>


        <form action="mpesa.php" method="POST">
            <div>
                <input type="text" placeholder="Phone number" name="phone_number"> <br>
                <input type="text" placeholder="Amount" name="amount"> <br>

                <input type="submit" value="Pay now" name="submit">
            </div>
        </form>
    </section>
</body>
</html>