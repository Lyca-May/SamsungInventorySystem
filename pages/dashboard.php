<?php
include("./functions/countData.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four Cards in a Column</title>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="intro-box">
                <div class="intro-text">Welcome to Samsung Inventory System!</div>
            </div>
            <div class="card-container">
                <div class="card">
                    <h2>Users</h2>
                    <p><?php echo $countUsersquery; ?></p>
                    <!-- <a href="#" class="btn">Learn More</a> -->
                </div>
                <div class="card">
                    <h2>Products</h2>
                    <p><?php echo $countProductquery; ?></p>
                    <!-- <a href="#" class="btn">Learn More</a> -->
                </div>
                <div class="card">
                    <h2>Categories</h2>
                    <p><?php echo $countCategoriesQuery; ?></p>
                    <!-- <a href="#" class="btn">Learn More</a> -->
                </div>
                <div class="card">
                    <h2>Sales</h2>
                    <p>0</p>
                    <!-- <a href="#" class="btn">Learn More</a> -->
                </div>
            </div>
            <br>
            <hr>


            <!-- /* TABLE SECTION */ -->

            <div>
                <div class="table-container">
                    <div class="table-wrapper">
                        <table class="data-table">
                            <!-- Table 1 content -->
                            <caption><b>Table 1 </b></caption>
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Data 1</td>
                                    <td>Data 2</td>
                                    <td>Data 3</td>
                                </tr>
                                <tr>
                                    <td>Data 4</td>
                                    <td>Data 5</td>
                                    <td>Data 6</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <!-- Add more tables here -->
                    <div class="table-wrapper">
                        <table class="data-table">
                            <!-- Table 2 content -->
                            <caption><b>Table 2 </b></caption>
                            <thead>
                                <tr>
                                    <th>Table 2 Column 1</th>
                                    <th>Table 2 Column 2</th>
                                    <th>Table 2 Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Table 2 Data 1</td>
                                    <td>Table 2 Data 2</td>
                                    <td>Table 2 Data 3</td>
                                </tr>
                                <tr>
                                    <td>Table 2 Data 4</td>
                                    <td>Table 2 Data 5</td>
                                    <td>Table 2 Data 6</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>

                    <div class="table-wrapper">
                        <table class="data-table">
                            <!-- Table 2 content -->
                            <caption><b>Table 3 </b></caption>
                            <thead>
                                <tr>
                                    <th>Table 2 Column 1</th>
                                    <th>Table 2 Column 2</th>
                                    <th>Table 2 Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Table 2 Data 1</td>
                                    <td>Table 2 Data 2</td>
                                    <td>Table 2 Data 3</td>
                                </tr>
                                <tr>
                                    <td>Table 2 Data 4</td>
                                    <td>Table 2 Data 5</td>
                                    <td>Table 2 Data 6</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <!-- Add more tables as needed -->
                </div>

            </div>

        </div>
    </div>


</body>

</html>