<?php include 'partials/header.php'; ?>
    <h1>Products</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                
                <tr>
                    <td><a href="<?php echo url('products/show/' . $product['id']); ?>"><?php echo $product['name']; ?></a></td>
                    <td><?php echo $product['price'] . '$'; ?></td>
                    <td><?php echo $product['description']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include 'partials/footer.php'; ?>