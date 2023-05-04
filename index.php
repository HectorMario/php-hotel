<?php
    
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    $tittle = $hotels[1];
    $park = $_GET["parking"];
    $votes = $_GET['vote']
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <div class="container my-5">

        <h1>HOTELS</h1>
        <form method="GET" action="index.php">
            <div class="input-group mb-5">

                <select name="parking" class="form-select rounded-3 text-center" aria-label="Default select example">
                    <option >All</option>
                    <option value="true">Parking</option>
                    <option value="false">No Parking</option>

                </select>
                <select name="vote" class="form-select rounded-3 text-center" aria-label="Default select example">
                    <option value="all">All</option>
                    <option value="1">one</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
                <button class="btn " type="submit">Envia</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                <?php foreach($tittle as $tittle => $value){?>
                            <th>
                                <?php echo $tittle ?>
                            </th>
                    <?php }?>   
                </tr>
            </thead>
            <?php if ($park === "true") { ?>
                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>

                            <?php foreach ($hotel as $key => $item) {
                                if ($hotel["parking"] === true) { if($hotel['vote'] == $votes || $votes == 'all' ){?>
                                    <td>
                                        <?php if ($item === true) {
                                            echo "si";
                                        } elseif ($item === false) {
                                            echo "No";
                                        } else echo $item ?>
                                    </td>
                            <?php }}
                            } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            <?php } elseif ($park === "false") { ?>
                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>

                            <?php foreach ($hotel as $key => $item) {
                                if ($hotel["parking"] === false) { if($hotel['vote'] == $votes || $votes == 'all' ){
                            ?>
                                    <td>
                                        <?php if ($item === true) {
                                            echo "si";
                                        } elseif ($item === false) {
                                            echo "No";
                                        } else echo $item ?>
                                    </td>
                            <?php }}
                            } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            <?php } else { ?>
                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>

                            <?php foreach ($hotel as $key => $item) { if($hotel['vote'] == $votes || $votes == 'all' || !isset($_GET["vote"])){
                            ?>
                                <td>
                                    <?php if ($item === true) {
                                        echo "si";
                                    } elseif ($item === false) {
                                        echo "No";
                                    } else echo $item ?>
                                </td>
                            <?php }
                            } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            <?php } ?>
        </table>
    </div>
</body>
    </html>
   

