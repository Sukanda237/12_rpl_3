<?php
include_once '../models/m_user.php';

$user = new User();
$users = $user->tampil_data();
