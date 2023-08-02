<div class="custom_container">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="page_title">
                <h2>Update Properties</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <input class="form_control" type="hidden" name="ajax_url" id="ajax_url" value="<?= admin_url('admin-ajax.php', null); ?>">
        <input class="form_control" type="hidden" name="ajax_action" id="ajax_action" value="update_product">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="typeProp">Type Of Property :</label>
               <select name="typeProp" id="typeProp" class="req" required disabled>
                    <option value="">Select Type Of Property</option>
                    <option value="House"  <?= $row['typeProp'] == 'House' ? 'selected' : '' ?>>House</option>
                    <option value="Office" <?= $row['typeProp'] == 'Office' ? 'selected' : '' ?>>Office</option>
                    <option value="Plotes"  <?= $row['typeProp'] == 'Plotes' ? 'selected' : '' ?>>Land</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="id">Property ID :</label>
               <input type="number" name="id" id="id" value="<?= $row['id'] ?>" class="req" disabled>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="name">Name :</label>
                <select name="name" id="product_name" class="req" required>
                    <option value="">Select For Rent Or Sale</option>
                    <option value="Rent" <?= $row['product_name'] == 'Rent' ? 'selected' : '' ?>>Rent</option>
                    <option value="Sale" <?= $row['product_name'] == 'Sale' ? 'selected' : '' ?>>Sale</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="city">City :</label>
               <select name="city" id="city" class="req" required>
                   <option value="">Select City</option>
                   <option value="Rajkot" <?= $row['city'] == 'Rajkot' ? 'selected' : '' ?>>Rajkot</option>
                   <option value="Junagadh" <?= $row['city'] == 'Junagadh' ? 'selected' : '' ?>>Junagadh</option>
               </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="area">Area :</label>
               <select name="area" id="area" class="req" required>
                   <option value="">Select Area</option>
                   <option value="Giriraj Road" <?= $row['area'] == 'Giriraj Road' ? 'selected' : '' ?>>Giriraj Road</option>
                   <option value="Joshipura" <?= $row['area'] == 'Joshipura' ? 'selected' : '' ?>>Joshipura</option>
                   <option value="Madhuram" <?= $row['area'] == 'Madhuram' ? 'selected' : '' ?>>Madhuram</option>
                   <option value="Motibagh" <?= $row['area'] == 'Motibagh' ? 'selected' : '' ?>>Motibagh</option>
                   <option value="Rajlaxmi Park" <?= $row['area'] == 'Rajlaxmi Park' ? 'selected' : '' ?>>Rajlaxmi Park</option>
                   <option value="Galiavad" <?= $row['area'] == 'Galiavad' ? 'selected' : '' ?>>Galiavad</option>
                   <option value="Bagdu" <?= $row['area'] == 'Bagdu' ? 'selected' : '' ?>>Bagdu</option>
                   <option value="Makhiyala" <?= $row['area'] == 'Makhiyala' ? 'selected' : '' ?>>Makhiyala</option>
                   <option value="Bhesan" <?= $row['area'] == 'Bhesan' ? 'selected' : '' ?>>Bhesan</option>
                   <option value="Timbavadi" <?= $row['area'] == 'Timbavadi' ? 'selected' : '' ?>>Timbavadi</option>
                   <option value="Zanzarda Road" <?= $row['area'] == 'Zanzarda Road' ? 'selected' : '' ?>>Zanzarda Road</option>
               </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="yards">Total Yards :</label>
                <input type="text" name="yards" id="yards" class="req" value="<?= $row['yards'] ?>" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="carpet">Total Carpet Area :</label>
               <input type="text" name="carpet" id="carpet" value="<?= $row['carpet'] ?>" class="req" onkeypress="return isNumberKey(event)">
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="price">Price :</label>
               <input type="text" name="price" id="price" value="<?= $row['price'] ?>" class="req" onkeypress="return isNumberKey(event)">
            </div>
        </div>
        <?php
            if ($row['typeProp'] == 'House') { ?>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="typeHome">Type Of Home :</label>
                       <select name="typeHome" id="typeHome" class="req" required>
                        <option value="">Select Type Of House</option>
                        <option value="Duplex" <?= $row['typeHome'] == 'Duplex' ? 'selected' : '' ?>>Duplex</option>
                        <option value="Triplex" <?= $row['typeHome'] == 'Triplex' ? 'selected' : '' ?>>Triplex</option>
                        <option value="Flat" <?= $row['typeHome'] == 'Flat' ? 'selected' : '' ?>>Flat</option>
                        <option value="Bungalow" <?= $row['typeHome'] == 'Bungalow' ? 'selected' : '' ?>>Bungalow</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="cons_old">How many years old Construction Is? </label>
                       <input type="text" name="cons_old" id="cons_old" class="req" value="<?= $row['cons_old'] ?>" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="bedrooms">Total number of Bedrooms : </label>
                       <input type="text" name="bedrooms" id="bedrooms" value="<?= $row['bedrooms'] ?>" class="req" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="bathrooms">Total number of Bathrooms :</label>
                       <input type="text" maxlength="10" name="bathrooms" id="bathrooms" value="<?= $row['bathrooms'] ?>" class="req" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                        <label for="parking">Two Wheeler Parking :</label>    
                        <select name="parking" id="parking" class="req" required>
                           <option value="">Is There Two Wheeler Parking ?</option>
                           <option value="Yes" <?= $row['parking'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                           <option value="No" <?= $row['parking'] == 'No' ? 'selected' : '' ?>>No</option>
                       </select>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="lift">Elevator (Lift): </label>
                       <select name="lift" id="lift" class="req" required>
                           <option value="">Do There Is Lift ?</option>
                           <option value="Yes" <?= $row['lift'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                           <option value="No" <?= $row['lift'] == 'No' ? 'selected' : '' ?>>No</option>
                       </select>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="furniture">Furniture: </label>
                       <select name="furniture" id="furniture" class="req" required>
                           <option value="">Is There Any Furniture ?</option>
                           <option value="Yes" <?= $row['furniture'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                           <option value="No" <?= $row['furniture'] == 'No' ? 'selected' : '' ?>>No</option>
                       </select>
                    </div>
                </div>
            <?php } elseif ($row['typeProp']=='Office') {?>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                    <label for="cons_old">How many years old Construction Is? </label>
                    <input type="text" name="cons_old" id="cons_old" class="req" value="<?= $row['cons_old'] ?>" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="bathrooms">Is Bathroom Available:</label>
                       <input type="text" maxlength="10" name="bathrooms" id="bathrooms" value="<?= $row['bathrooms'] ?>" class="req" onkeypress="return isNumberKey(event)">
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                        <label for="parking">Two Wheeler Parking :</label>    
                        <select name="parking" id="parking" class="req" required>
                           <option value="">Is There Two Wheeler Parking ?</option>
                           <option value="Yes" <?= $row['parking'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                           <option value="No" <?= $row['parking'] == 'No' ? 'selected' : '' ?>>No</option>
                       </select>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="lift">Elevator (Lift): </label>
                       <select name="lift" id="lift" class="req" required>
                           <option value="">Do There Is Lift ?</option>
                           <option value="Yes" <?= $row['lift'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                           <option value="No" <?= $row['lift'] == 'No' ? 'selected' : '' ?>>No</option>
                       </select>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="custom_group">
                       <label for="furniture">Furniture: </label>
                       <select name="furniture" id="furniture" class="req" required>
                           <option value="">Is There Any Furniture ?</option>
                           <option value="Yes" <?= $row['furniture'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                           <option value="No" <?= $row['furniture'] == 'No' ? 'selected' : '' ?>>No</option>
                       </select>
                    </div>
                </div>
            <?php } ?>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="water">Regular Water Supply</label>
               <select name="water" id="water" class="req" required>
                   <option value="">Do There Is Regular Water Supply ?</option>
                   <option value="Yes" <?= $row['water'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                   <option value="No" <?= $row['water'] == 'No' ? 'selected' : '' ?>>No</option>
               </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="roadFacing">Road Facing</label>
               <select name="roadFacing" id="roadFacing" class="req" required>
                   <option value="">Is It Road Facing ?</option>
                   <option value="Yes" <?= $row['roadFacing'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                   <option value="No" <?= $row['roadFacing'] == 'No' ? 'selected' : '' ?>>No</option>
               </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="cctv">CCTV Camera</label>
               <select name="cctv" id="cctv" class="req" required>
                   <option value="">Do There Is CCTV?</option>
                   <option value="Yes" <?= $row['cctv'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                   <option value="No" <?= $row['cctv'] == 'No' ? 'selected' : '' ?>>No</option>
               </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="other">Other Facilities :</label>
               <input type="text" name="other" id="other" value="<?= $row['other']?>" class="req">
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="feature_image">Upload Feature Image :</label>
               <!-- <input type="file" name="feature_image" id="feature_image" class="req" required> -->
                <input type="button" class=" button" value="<?php _e( 'Upload image' ); ?>" onclick="saveImage(event);" accept="image/<span>*</span>"/>
                <input class="form_control" class="button" type='hidden' name="feature_image" id="feature_image" value="" >
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="multiple_image">Upload Multiple Images :</label>
               <input type="button" class="button multiple_image" value="Add Images" onclick="multiple_image(event);" accept="image/<span>*</span>">
               <div id="multiple_image" ></div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-md-6">
            <div class="custom_group">
                <input type="submit" class="btn" value="Submit" id="submit" name="submit" onclick="propUpdate(<?= $row['id'] ?>);" href="">
            </div>
        </div>
    </div>
</div>
