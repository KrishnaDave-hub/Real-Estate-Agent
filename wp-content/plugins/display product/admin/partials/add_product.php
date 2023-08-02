<div class="custom_container">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="page_title">
                <h2>Add Details</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <input class="form_control" type="hidden" name="ajax_url" id="ajax_url" value="<?= admin_url('admin-ajax.php', null); ?>">
        <input class="form_control" type="hidden" name="ajax_action" id="ajax_action" value="add_product">
        <!-- <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
               <label for="id">Property ID :</label>
               <input type="number" name="id" id="id" class="req">
            </div>
        </div> -->
        <div class="col-12 col-lg-12 col-md-12" id="selectedProp">
            <div class="custom_group">
               <label for="typeProp">Type Of Property :</label>
               <select name="typeProp" id="typeProp" class="req" onChange="propType()" required>
                    <option value="">Select Type Of Property</option>
                    <option value="House">House</option>
                    <option value="Plotes">Plotes</option>
                    <option value="Office">Office</option>
                </select>
            </div>
        </div>
    </div>
    <div id="comman_top_field" class="row">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="name">For Rent Or Sale? :</label>
                <select name="name" id="name" class="req" required>
                    <option value="">Select For Rent Or Sale</option>
                    <option value="Rent">Rent</option>
                    <option value="Sale">Sale</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="city">City :</label>
                <select name="city" id="city" class="req" required>
                    <option value="">Select City</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="Junagadh">Junagadh</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="area">Area :</label>
                <select name="area" id="area" class="req" required>
                    <option value="">Select Area</option>
                    <option value="Giriraj">Giriraj Road</option>
                    <option value="Joshipura">Joshipura</option>
                    <option value="Madhuram">Madhuram</option>
                    <option value="Motibagh">Motibagh</option>
                    <option value="Rajlaxmi Park">Rajlaxmi Park</option>
                    <option value="Galiavad">Galiavad</option>
                    <option value="Bagdu">Bagdu</option>
                    <option value="Makhiyala">Makhiyala</option>
                    <option value="Bhesan">Bhesan</option>
                    <option value="Timbavadi">Timbavadi</option>
                    <option value="Zanzarda Road">Zanzarda Road</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="yards">Total Yards :</label>
                <input type="text" name="yards" id="yards" class="req" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="carpet">Total Carpet Area :</label>
                <input type="text" name="carpet" id="carpet" class="req" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="price">Price :</label>
                <input type="text" name="price" id="price" class="req" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
    </div>
    <div id="house" class="row">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="typeHome">Type Of Home :</label>
                <select name="typeHome" id="typeHome" class="req" required>
                    <option value="">Select Type Of House</option>
                    <option value="Duplex">Duplex</option>
                    <option value="Triplex">Triplex</option>
                    <option value="Bungalow">Bungalow</option>
                    <option value="Bungalow">Flat</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="cons_old">How many years old Construction Is? </label>
                <input type="text" name="cons_old" id="cons_old" class="req" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="bedrooms">Total number of Bedrooms : </label>
                <input type="text" name="bedrooms" id="bedrooms" class="req" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="bathrooms">Total number of Bathrooms :</label>
                <input type="text" maxlength="10" name="bathrooms" id="bathrooms" class="req"
                    onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="parking">Two Wheeler Parking :</label>
                <select name="parking" id="parking" class="req" required>
                    <option value="">Is There Two Wheeler Parking ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="lift">Elevator (Lift): </label>
                <select name="lift" id="lift" class="req" required>
                    <option value="">Do There Is Lift ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="furniture">Furniture : </label>
                <select name="furniture" id="furniture" class="req" required>
                    <option value="">Do There Is Furniture ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <div id="office" class="row">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="cons_old">How many years old Construction Is? </label>
                <input type="text" name="cons_old" id="cons_old" class="req" onkeypress="return isNumberKey(event)" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="bathrooms">Is Bathroom Available:</label>
                <input type="text" name="bathrooms" id="bathrooms" class="req" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="parking">Two Wheeler Parking :</label>
                <select name="parking" id="parking" class="req" required>
                    <option value="">Is There Two Wheeler Parking ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="lift">Elevator (Lift): </label>
                <select name="lift" id="lift" class="req" required>
                    <option value="">Do There Is Lift ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="furniture">Furniture : </label>
                <select name="furniture" id="furniture" class="req" required>
                    <option value="">Do There Is Furniture ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <div id="bottom_top_field" class="row">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="water">Regular Water Supply</label>
                <select name="water" id="water" class="req" required>
                    <option value="">Do There Is Regular Water Supply ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="electricity">24/7 Electricity Supply</label>
                <select name="electricity" id="electricity" class="req" required>
                    <option value="">Do There Is Electricity Supply ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="roadFacing">Road Facing</label>
                <select name="roadFacing" id="roadFacing" class="req" required>
                    <option value="">Is It Road Facing ?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="cctv">CCTV Camera</label>
                <select name="cctv" id="cctv" class="req" required>
                    <option value="">Do There Is CCTV?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="other">Other Facilities :</label>
                <input type="text" name="other" id="other" class="req" />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="feature_image">Upload Home Feature Image :</label>
                <!-- <input type="file" name="feature_image" id="feature_image" class="req" required> -->
                <input type="button" class="req button" value="Upload image" onclick="saveImage(event)"
                    accept="image/<span>*</span>" />
                <input class="form_control" class="button" type="hidden" name="feature_image" id="feature_image" value=""
                    required />
            </div>
        </div>
        <div class="col-12 col-lg-12 col-md-12">
            <div class="custom_group">
                <label for="multiple_image">Upload Home's Multiple Images :</label>
                <input type="button" class="button multiple_image" value="Add Images" onclick="multiple_image(event);" accept="image/<span>*</span>">
               <div id="multiple_image" ></div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-md-6">
            <div class="custom_group">
                <input type="submit" class="btn" value="Submit" id="submit" name="submit" onclick="saveProduct()" />
            </div>
        </div>
    </div>
<!-- </div> -->