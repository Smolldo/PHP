<?php
    require "data/declare-data.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./diseadeForm.css">
    <title>pehepe</title>
</head>

<body>
    
       <header>
        <h1>Document name: 
            <span class="document_name">
                <?php echo $data['treatment']['list']; ?>
            </span>
        </h1>
        <h2>Doctor:
            <span class="doctor_name">
                <?php echo $data['treatment']['doctor']; ?>
            </span>
        </h2>
        <h3>Traumatologist. 
            <span class="doctor_specialization">
                <?php echo $data['treatment']['specialization']; ?>
            </span>    
        </h3>
        </header>
        <section class="table_section">
            <table class="table">
                <thead class="table_head">
                    <tr>
                        <th>№</th>
                        <th>First / Last name</th>
                        <th>Year of birth</th>
                        <th>Address</th>
                        <th>Disease</th>
                        <th>Form of disease</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data['patients'] as $key => $patients) {
                            $row_class = 'row';
                        if ($patients['typeOfDisease'] == "easy") {
                            $row_class = 'easy';
                        }
                        if ($patients['typeOfDisease'] == "medium") {
                            $row_class = 'medium';
                        }
                        if ($patients['typeOfDisease'] == "hard"){
                            $row_class = 'hard';
                        }
                        echo "<tr class = '$row_class'>
                            <td>".($key + 1)."</td>
                            <td>".$patients['patientName']."</td>
                            <td>".$patients['birthDate']."</td>
                            <td>".$patients['address']."</td>
                            <td>".$patients['disease']."</td>
                            <td>".$patients['typeOfDisease']."</td>
                        </tr>";
                        }     
                    ?>
                </tbody>
            </table>
        </section>
      
</body>

</html>