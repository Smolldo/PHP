<?php
    $data = [];

    $f = fopen("data/doctor.txt", "r");
    $grStr = fgets($f);
    $grArr = explode(";", $grStr);
    fclose($f);

    $data['treatment'] =[
        'list' => $grArr[0],
        'doctor' => $grArr[1],
        'specialization' => $grArr[2],
    ];

    $f = fopen("data/patients.txt", "r");
    while(!feof($f)) {
        $rowStr = fgets($f);
        $rowArr = explode(";", $rowStr);
        $Patients = [
            "patientName" =>$rowArr[0],
            'birthDate' =>$rowArr[1],
            'address' =>$rowArr[2],
            'disease' =>$rowArr[3],
            "typeOfDisease" =>$rowArr[4],
        ];
        $data['patients'][] = $Patients;
    }
    fclose($f)
?>