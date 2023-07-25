<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<div class="container mt-2">
    <div class="col-md-6 ms-auto me-auto mt-5">
        <h2>Register</h2>
        <hr>
        <form action="authenticator/register.php" method="post">
            <div class="mb-3">
                <label for="user_name_id" class="form-label">Name</label>
                <input name="user_name" type="text" class="form-control" id="user_name_id">
            </div>

            <div class="mb-3">
                <label for="user_surname_id" class="form-label">Surname</label>
                <input name="user_surname" type="text" class="form-control" id="user_surname_id">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="user_country_id" class="form-label">Country</label>
                <input name="user_country" type="text" class="form-control" id="user_country_id">
            </div>

            <div class="mb-3">
                <label for="user_city_id" class="form-label">City</label>
                <input name="user_city" type="text" class="form-control" id="user_city_id">
            </div>

            <div class="mb-3">
                <label for="user_district_id" class="form-label">District</label>
                <input name="user_district" type="text" class="form-control" id="user_district_id">
            </div>

            <div class="mb-3">
                <label for="user_full_address_id" class="form-label">Address</label>
                <input name="user_full_address" type="text" class="form-control" id="user_full_address_id">
            </div>

            <div class="mb-3">
                Gender
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="user_gender" value="Erkek"> Erkek
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="user_gender" value="Kadın    "> Kadın
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="mt-5 text-center">
            <a href="loginUi.php">Login</a>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
