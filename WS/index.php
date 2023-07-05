<?php
// Below is optional, remove if you have already connected to your database.
include("database.php");


// For extra protection these are the columns of which the user can sort by (in your database table).
$columns = array('Navn', 'Rekke', 'Teknologi', 'Smak', 'Intensitet', 'Størrelse', 'Opphav');

// Only get the column if it exists in the above columns array, if it doesn't exist the database table will be sorted by the first item in the columns array.
$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];

// Get the sort order for the column, ascending or descending, default is ascending.
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Get the result...
if ($result = $mysqli->query('SELECT * FROM kapsel ORDER BY ' . $column . ' ' . $sort_order)) {
    // Some variables we need for the table.
    $up_or_down = str_replace(array('ASC', 'DESC'), array('up', 'down'), $sort_order);
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
    $add_class = ' class="highlight"';
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Nespresso Coffee Table</title>
        <meta charset="utf-8">
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
        <link rel="stylesheet" href="custom.css">
        <style>
            html {
                font-family: Tahoma, Geneva, sans-serif;
                padding: 10px;
            }

            body {
                background-color: lightgray;
            }

            table {
                border-collapse: collapse;
            }

            th {
                background-color: #54585d;
                border: 1px solid #54585d;
            }

            th:hover {
                background-color: #64686e;
            }

            th a {
                display: block;
                text-decoration: none;
                padding: 10px;
                color: #ffffff;
                font-weight: bold;
                font-size: 13px;
            }

            th a i {
                margin-left: 5px;
                color: rgba(255, 255, 255, 0.4);
            }

            td {
                padding: 10px;
                color: #636363;
                border: 1px solid #dddfe1;
            }

            tr {
                background-color: #ffffff;
            }

            tr .highlight {
                background-color: #f9fafb;
            }

            .search{
                position: relative;
                box-shadow: 0 0 40px rgba(51, 51, 51, .1);
                
            }

            .search input{

                height: 60px;
                text-indent: 25px;
                border: 2px solid #d6d4d4;


            }


            .search input:focus{

                box-shadow: none;
                border: 2px solid blue;


            }

            .search .fa-search{

                position: absolute;
                top: 20px;
                left: 16px;

            }

            .search button{

                position: absolute;
                top: 5px;
                right: 5px;
                height: 50px;
                width: 110px;
                background: blue;

            }
        </style>
    <?php include("tracker.php") ?>
    </head>
    <body>
        <div class="container">
                <div class="search col">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" id="searchInput" placeholder="Søk">
                    <button id="Search" class="btn btn-primary">Search</button>
                </div>
                
                <table class="col-12 order-3">
                    <thead>
                        <tr>
                            <th><a
                                    href="index.php?column=Navn&order=<?php echo $asc_or_desc; ?>">Navn<i
                                        class="fas fa-sort<?php echo $column == 'Navn' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                            <th><a
                                    href="index.php?column=Rekke&order=<?php echo $asc_or_desc; ?>">Rekke<i
                                        class="fas fa-sort<?php echo $column == 'Rekke' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                            <th><a
                                    href="index.php?column=Teknologi&order=<?php echo $asc_or_desc; ?>">Teknologi<i
                                        class="fas fa-sort<?php echo $column == 'Teknologi' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                            <th><a
                                    href="index.php?column=Smak&order=<?php echo $asc_or_desc; ?>">Smak<i
                                        class="fas fa-sort<?php echo $column == 'Smak' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                            <th><a
                                    href="index.php?column=Intensitet&order=<?php echo $asc_or_desc; ?>">Intensitet<i
                                        class="fas fa-sort<?php echo $column == 'Intensitet' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                            <th><a
                                    href="index.php?column=Størrelse&order=<?php echo $asc_or_desc; ?>">Størrelse<i
                                        class="fas fa-sort<?php echo $column == 'Størrelse' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                            <th><a
                                    href="index.php?column=Opphav&order=<?php echo $asc_or_desc; ?>">Opphav<i
                                        class="fas fa-sort<?php echo $column == 'Opphav' ? '-' . $up_or_down : ''; ?>"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="Navn">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td<?php echo $column == 'Navn' ? $add_class : ''; ?>><?php echo $row['Navn']; ?></td>
                                <td<?php echo $column == 'Rekke' ? $add_class : ''; ?>><?php echo $row['Rekke']; ?></td>
                                    <td<?php echo $column == 'Teknologi' ? $add_class : ''; ?>><?php echo $row['Teknologi']; ?></td>
                                        <td<?php echo $column == 'Smak' ? $add_class : ''; ?>><?php echo $row['Smak']; ?></td>
                                            <td<?php echo $column == 'Intensitet' ? $add_class : ''; ?>><?php echo $row['Intensitet']; ?></td>
                                                <td<?php echo $column == 'Størrelse' ? $add_class : ''; ?>><?php echo $row['Størrelse']; ?> ml</td>
                                                    <td<?php echo $column == 'Opphave' ? $add_class : ''; ?>><?php echo $row['Opphav']; ?></td>
                        </tr>
                    
                    <?php endwhile; ?>
                    <tbody>
                </table>
        </div>
        <script src="index.js" type="text/javascript"></script>
    </body>
    </html>
    <?php
    $result->free();
}
?>