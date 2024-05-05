<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Rick y Morty</h1>
    <table>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Status</th>
                <th>Species</th>
                <th>Gender</th>
                <th>Origin</th>
                <th>Location</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $url = "https://rickandmortyapi.com/api/character/";
            $data = file_get_contents($url);
            $characters = json_decode($data);

            foreach ($characters->results as $character) {
                echo "<tr>";
                
                echo "<td>{$character->name}</td>";
                echo "<td>{$character->status}</td>";
                echo "<td>{$character->species}</td>";
                echo "<td>{$character->gender}</td>";
                echo "<td>{$character->origin->name}</td>";
                echo "<td>{$character->location->name}</td>";
                echo "<td><img src='{$character->image}' alt='{$character->name}' style='width: 300px; height: auto;'></td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>


