<?php

required '../config/app-php';

$query = select("SELECT * FROM barang");

echo json_encode($query);
