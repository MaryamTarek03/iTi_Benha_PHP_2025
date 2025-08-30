<?php include 'partials/header.php'; ?>


<h1>Create Product</h1>
<form action=<?php echo url('products/store'); ?> method="POST">
    <div>
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" placeholder="Enter product name" required>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" id="price" name="price" placeholder="Enter product price" required>
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" placeholder="Enter product quantity" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Enter product description" required></textarea>
    </div>
    <button type="submit" name="submit" class="button">Create Product</button>
</form>


<?php include 'partials/footer.php'; ?>