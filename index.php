<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>oDesk test</title>
        <meta name="description" content="oDesk test">
        <link rel="stylesheet" href="main.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    </head>
    <body>

    <?php 
        $data = array(
            array(
                'Name' => 'Trixie',
                'Color' => 'Green',
                'Element' => 'Earth',
                'Likes' => 'Flowers'
                ),
            array(
                'Name' => 'Tinkerbell',
                'Element' => 'Air',
                'Likes' => 'Singning',
                'Color' => 'Blue'
                ), 
            array(
                'Element' => 'Water',
                'Likes' => 'Dancing',
                'Name' => 'Blum',
                'Color' => 'Pink'
                ),
        );
    ?>

        <div id="content">
            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Color</td> 
                        <td>Eement</td>
                        <td>Likes</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row){ ?>
                        <tr style="background-color: <?php echo $row['Color']; ?>;">
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Color']; ?></td> 
                            <td><?php echo $row['Element']; ?></td>
                            <td><?php echo $row['Likes']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>	
    </body>
</html>