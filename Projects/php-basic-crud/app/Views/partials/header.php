<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP CRUD</title>
    <link rel="stylesheet" href="../../public/style.css">
</head>
<body>
    <nav>
        <h1><a href="<?php echo url('home'); ?>">Shopee</a></h1>
            <ul>
                <li class="nav-item"><a href="<?php echo url('home'); ?>">Home</a></li>
                <li class="nav-item"><a href="<?php echo url('products'); ?>">Products</a></li>
                <li><a href="<?php echo url('products/create'); ?>" class="button">Create New Product</a></li>
            </ul>
    </nav>
    <div class="container">
        