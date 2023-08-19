<?php 
    require('connection.inc.php'); 
    $sql = "SELECT DISTINCT `country` FROM `customers`";
    $res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northwind - Customers</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>View Customers</h1>
        <from>
            <select id="country" name="country" class="form-select form-select-md mb-3" aria-label="selectcountry">
                <option selected>Select Country</option>
                <?php
                while($rows = mysqli_fetch_assoc($res)){
                ?>
                <option value="<?php echo $rows['country']; ?>"><?php echo $rows['country']; ?></option>
                <?php
                }
                ?>
            </select>    
            <select id="city" name="city" class="form-select form-select-md mb-3" aria-label="selectcity" disabled>
                <option selected>Select City</option>                
            </select>    
        </from>
    </div>
    <script>
        $(document).ready(function(){
            $("#country").change(function(){
                let country = $(this).val();
                console.log(country);
                $.ajax({
                    method: "POST",
                    url: "get_cities.php",
                    data: {country : country},
                    success: function(result){
                        $("#city").html(result).prop("disabled", false);
                    }
                });
            });

        });
    </script>
</body>

</html>