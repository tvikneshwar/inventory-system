<?php include('includes/views-config.php'); ?>

            <div class="row">
                <div class="col-sm-12">
                    
                    <form>
                    <div class="select-container boxed-turquoise pull-left">
                        <label>Category</label>
                        <select name="category_selector">
                            <option value="">Category 1</option>
                            <option value="">Category 2</option>
                            <option value="">Category 3</option>
                        </select>
                    </div>

                    <div class="select-container boxed-turquoise pull-left">
                        <label>Product Name</label>
                        <input type="text" name="product_name"  />
                    </div>
                    </form>


                    <div id="add-new-product" class="pull-right">
                        <a class="btn boxed-turquoise bold" href="<?php echo $add_new_product; ?>"><span>Add New Product</span></a>
                    </div>

                    <table class="boxed-table">
                        <thead class="boxed-dark-green">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Stocks</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                                foreach($products as $product){
                                    $id = $product['id'];
                                    $code = $product['code'];
                                    $name = $product['name'];
                                    $stocks = $product['stocks'];
                                    $price = $product['price'];
                                    $date_created = $product['date_created'];
                                    $subcategory_id = $product['subcategory_id'];
                                    
                            ?>
                            <tr>
                                <td class="number"><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td class="number">
                                    <?php echo $stocks; ?>
                                </td>
                                <td class="price"><span><?php echo $price; ?> PHP<span></td>
                                <td class="options">
                                    <a class="btn btn-blue btn-icon-right btn-arrow-right" href="<?php echo $edit_product . '/' . $id; ?>"><span>View Full Info</span></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <!-- tf pagination -->
                            <div class="tf_pagination style3">
                                <div class="inner">
                                    <!--<a class="page_prev" href="#"><span>&lsaquo;</span></a>

                                    <span class="page-numbers page_current">1</span>
                                    <a href="#" class="page-numbers page_current">2</a>
                                    <a href="#" class="page-numbers">2</a>
                                    <a href="#" class="page-numbers">3</a>

                                    <a class="page_next" href="#"><span>&rsaquo;</span></a>-->
                                    <?php echo $links; ?>
                                </div>
                                
                            </div>

                            
                           
                            <!--/ tf pagination -->
                </div>
            </div>