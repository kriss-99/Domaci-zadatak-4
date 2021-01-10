<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Sve zelje</title>
    
</head>
<body>

   
            <h1 class="text-center naslov">🎁Lista svih želja🎁 </h1>
        
        <table id="idtabela" class="table table-hover table-secondary table-striped mt-5">
            <thead>
                <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Grad</th>
                <th>Dobar?</th>
                <th>Želja</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $folder = "db_zelje";

                    $ar = scandir($folder);

                    foreach ($ar as $file) {

                        if ($file == "." || $file == "..") continue;


                        $f2 = fopen($folder . "/" . $file, "r") or die("Unable to open file!");
                        $table = fread($f2, filesize($folder . "/" . $file));
                        $niz = json_decode($table, true);
                        fclose($f2);

                        echo "<tr>";

                        foreach ($niz as $el) {
                            echo "<td>$el</td>";
                        }
                        echo "</tr>";
                    }

                ?>
            </tbody>

        </table>
    </div>
    



   
</body>
</html>