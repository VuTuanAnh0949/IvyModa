<?php 
              $show_brand = $product->show_brand();
              if($show_brand){while($result=$show_brand->fetch_assoc()){

            
              ?>
                <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>
                <?php 
               }}
?>