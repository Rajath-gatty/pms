<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PMS</title>
</head>
<body>
    
    <nav>
        <div class="container">
            <div class="nav-container">
                <div class="main-hdng">
                    <h2>PMS</h2>
                </div>
                <div class="nav-menus">
                    <ul>
                        <li><a href="about.php" class="link">About</a></li>
                    </ul>
                </div>    
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="card-container">
                <div class="card">
                    <h2 class="hdng">Cars available to Park</h2>
                    <p class="num">6</p>
                    <div class="add-btn">
                        <a href="add.php" class="btn-link" title="Add car"><i class="fas fa-plus fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="park-details">
        <div class="container">
        <p class="hdng-2">Parked cars</p>
        <div class="underline"></div>
            <div class="card-2">
                <table>
                    <tr class="table-hdng">
                        <th>Name</th>
                        <th>Car no.</th>
                        <th>Date of entry</th>
                    </tr>
                    <tr class="table-data">
                        <td>Rajath</td>
                        <td>KA194516</td>
                        <td>45/11/23</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/b52e8bea83.js" crossorigin="anonymous"></script>
</body>
</html>