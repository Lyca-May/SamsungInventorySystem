<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <title>Four Cards in a Column</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/index.js"></script>

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
                            <div class="datatable-container1">
                                <!-- HTML table with student data -->
                                <br>
                                <table id="tableID1" class="display">
                                    <thead>
                                        <tr>
                                            <th>StudentID</th>
                                            <th>StudentName</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Marks Scored</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ST1</td>
                                            <td>Prema</td>
                                            <td>35</td>
                                            <td>Female</td>
                                            <td>320</td>
                                        </tr>
                                        <tr>
                                            <td>ST2</td>
                                            <td>Wincy</td>
                                            <td>36</td>
                                            <td>Female</td>
                                            <td>170</td>
                                        </tr>
                                        <tr>
                                            <td>ST6</td>
                                            <td>William</td>
                                            <td>37</td>
                                            <td>Female</td>
                                            <td>372</td>
                                        </tr>
                                        <tr>
                                            <td>ST10</td>
                                            <td>Frost</td>
                                            <td>29</td>
                                            <td>male</td>
                                            <td>300</td>
                                        </tr>
                                        <tr>
                                            <td>ST13</td>
                                            <td>Kennedy</td>
                                            <td>43</td>
                                            <td>male</td>
                                            <td>313</td>
                                        </tr>
                                        <tr>
                                            <td>ST14</td>
                                            <td>Fiza</td>
                                            <td>31</td>
                                            <td>Female</td>
                                            <td>750</td>
                                        </tr>
                                        <tr>
                                            <td>ST15</td>
                                            <td>Silva</td>
                                            <td>34</td>
                                            <td>male</td>
                                            <td>985</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Add more tables here -->
                        <div class="table-wrapper">
                            <div class="datatable-container">
                                <!-- HTML table with student data -->
                                <br>
                                <table id="tableID2" class="display">
                                    <thead>
                                        <tr>
                                            <th>StudentID</th>
                                            <th>StudentName</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Marks Scored</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ST1</td>
                                            <td>Prema</td>
                                            <td>35</td>
                                            <td>Female</td>
                                            <td>320</td>
                                        </tr>
                                        <tr>
                                            <td>ST2</td>
                                            <td>Wincy</td>
                                            <td>36</td>
                                            <td>Female</td>
                                            <td>170</td>
                                        </tr>
                                        <tr>
                                            <td>ST6</td>
                                            <td>William</td>
                                            <td>37</td>
                                            <td>Female</td>
                                            <td>372</td>
                                        </tr>
                                        <tr>
                                            <td>ST10</td>
                                            <td>Frost</td>
                                            <td>29</td>
                                            <td>male</td>
                                            <td>300</td>
                                        </tr>
                                        <tr>
                                            <td>ST13</td>
                                            <td>Kennedy</td>
                                            <td>43</td>
                                            <td>male</td>
                                            <td>313</td>
                                        </tr>
                                        <tr>
                                            <td>ST14</td>
                                            <td>Fiza</td>
                                            <td>31</td>
                                            <td>Female</td>
                                            <td>750</td>
                                        </tr>
                                        <tr>
                                            <td>ST15</td>
                                            <td>Silva</td>
                                            <td>34</td>
                                            <td>male</td>
                                            <td>985</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </div>


</body>

</html>