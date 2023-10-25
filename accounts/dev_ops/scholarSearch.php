<?php
    require '../../config/includes.php';
    require '_session.php';

    $scholar_code = clean_string($_GET['scholar_code']);
    $schoolID = clean_string($_GET['schoolID']);
    $scholar_name = clean_string($_GET['scholar_name']);
    $multiStepsSchool = clean_string($_GET['multiStepsSchool']);
    $multiStepStatus = clean_string($_GET['multiStepStatus']);
    $multiMunicipalites = clean_string($_GET['multiMunicipalites']);
    $scholar_date = clean_string($_GET['scholar_date']);


?>