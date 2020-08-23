<?php
include('../models/DAO/DAO.php');
include('../models/DAO/ClasseDAO.php');

$coucou = new ClasseDAO();
$coucou->fetch(1); // Erreur