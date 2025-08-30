<?php include 'partials/header.php'; ?>

<h1>Edit Product</h1>
<form action=<?php echo url('products/update'); ?> method="POST">
    <!-- htmlspecialchars prevent XSS attacks -->
    <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>"> 
    <div>
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" id="price" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" value="<?= htmlspecialchars($product['quantity']) ?>" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required><?= htmlspecialchars($product['description']) ?></textarea>
    </div>
    <button type="submit" name="submit" class="button">Update Product</button>
</form>

<?php include 'partials/footer.php'; ?>