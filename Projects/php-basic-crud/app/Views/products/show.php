<?php include 'partials/header.php'; ?>
        <!-- Breadcrumb navigation -->
        <div class="breadcrumb">
            <a href="<?php echo url('products'); ?>">← Back to Products</a>
        </div>
        
        <!-- Product card -->
        <div class="product-card">
            <div class="product-header">
                <h1 class="product-title"><?php echo htmlspecialchars($product["name"] ?? 'Product Details'); ?></h1>
                <p class="product-subtitle">Product Information</p>
            </div>
            
            <div class="product-details">
                <div class="detail-item">
                    <div class="detail-label">Product ID</div>
                    <div class="detail-value">#<?php echo htmlspecialchars($product["id"] ?? 'N/A'); ?></div>
                </div>
                
                <div class="detail-item">
                    <div class="detail-label">Status</div>
                    <div class="detail-value"><?php echo htmlspecialchars($product["quantity"] > 0 ? 'In Stock' : 'Out of Stock'); ?></div>
                </div>
                
                <div class="detail-item">
                    <div class="detail-label">Quantity</div>
                    <div class="detail-value"><?php echo htmlspecialchars($product["quantity"] ?? '0'); ?></div>
                </div>
                
                <div class="detail-item">
                    <div class="detail-label">Price</div>
                    <div class="detail-value">$<?php echo htmlspecialchars($product["price"] ?? '0.00'); ?></div>
                </div>
            </div>

            <?php if (isset($product["description"]) && !empty($product["description"])): ?>
            <div class="detail-item" style="grid-column: 1 / -1; margin-bottom: 30px;">
                <div class="detail-label">Description</div>
                <div class="detail-value" style="font-size: 1.1em; line-height: 1.6;">
                    <?php echo htmlspecialchars($product["description"]); ?>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="product-actions">
                <a href="<?php echo url('products/edit/' . ($product["id"])); ?>" class="button">
                    ✏️ Edit Product
                </a>
                <a href="<?php echo url('products/delete/' . ($product["id"])); ?>" 
                   class="button" 
                   onclick="return confirm('Are you sure you want to delete this product?')">
                    ❌ Delete Product
                </a>
            </div>
        </div>
<?php include 'partials/footer.php'; ?>