<?php
    class Database
    {
        public function productList()
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $productList = $wpdb->get_results("SELECT * FROM $table_name order by id desc LIMIT 6",ARRAY_A);

            return $productList;
        }
        public function product_list_admin($getData)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $where="";
            if(isset($_GET) && $_GET)
            {
                if(isset($_GET['search']) && $_GET['search'])
                {
                    $where .= 'WHERE `typeProp` = "'.$_GET['search'].'"';
                }
            }
            $productList = $wpdb->get_results("SELECT * FROM $table_name $where",ARRAY_A);
            return $productList;
        }
        public function add_product($getData)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $image_table_name = $wpdb->prefix.'product_images';
            $ans = 0;
            if($getData){
                $Insert = $wpdb->insert($table_name,
                array(
                        'typeProp' => $getData['typeProp'],
                        'typeHome' => $getData['typeHome'],
                        'cons_old' => $getData['cons_old'],
                        'bedrooms' => $getData['bedrooms'],
                        'bathrooms' => $getData['bathrooms'],
                        'parking' => $getData['parking'],
                        'electricity' => $getData['electricity'],
                        'furniture' => $getData['furniture'],
                        'lift' => $getData['lift'],
                        'product_name' => $getData['product_name'],
                        'city' => $getData['city'],
                        'area' => $getData['area'],
                        'yards' => $getData['yards'],
                        'carpet' => $getData['carpet'],
                        'price' => $getData['price'],
                        'water' => $getData['water'],
                        'roadFacing' => $getData['roadFacing'],
                        'cctv' => $getData['cctv'],
                        'other' => $getData['other'],
                        'feature_image' => $getData['feature_image'],
                    )
                );
                $productId = $wpdb->insert_id;
                $multiImages = $getData['image_name'];
                foreach($multiImages as $image)
                {
                    $Insert = $wpdb->insert($image_table_name,
                    array(
                        'product_id' => $productId,
                        'image_name' => $image,
                        )
                    );
                }
                echo $wpdb->show_errors();
                echo $wpdb->print_error();
                $ans = 1;
            }
            return $ans;
        }
        public function delete_prop($getData)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $ans = 0;
            $id = $getData['id'];
            if($id)
            {
                $ans = $wpdb->delete($table_name, array('id'=>$id));
                echo $wpdb->show_errors();
                echo $wpdb->print_error();
            }
            return $ans;
        }

        public function edit_car($id)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $productList = $wpdb->get_results("SELECT * FROM $table_name WHERE `id` ='". $id."'",ARRAY_A);    
            return $productList[0];
        }

        public function update_prop($id)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $image_table_name = $wpdb->prefix.'product_images';
            $ans = 0;
            if($getData['id'])
            {
                    $ans = $wpdb->update(
                        $table_name, 
                        array(
                            'typeHome' => $getData['typeHome'],
                            'cons_old' => $getData['cons_old'],
                            'bedrooms' => $getData['bedrooms'],
                            'bathrooms' => $getData['bathrooms'],
                            'parking' => $getData['parking'],
                            'electricity' => $getData['electricity'],
                            'furniture' => $getData['furniture'],
                            'lift' => $getData['lift'],
                            'product_name' => $getData['product_name'],
                            'city' => $getData['city'],
                            'area' => $getData['area'],
                            'yards' => $getData['yards'],
                            'carpet' => $getData['carpet'],
                            'price' => $getData['price'],
                            'water' => $getData['water'],
                            'roadFacing' => $getData['roadFacing'],
                            'cctv' => $getData['cctv'],
                            'other' => $getData['other'],
                            'feature_image' => $getData['feature_image'],
                        ), 
                        array(
                            'id'=>$getData['id'],
                            'typeProp' => $getData['typeProp']
                        )
                    );
                    if($getData['image_name'])
                    {
                        $wpdb->delete($image_table_name, array('id'=>$getData['id']));
                        $multiImages = $getData['image_name'];
                        foreach($multiImages as $image)
                        {
                            $Insert = $wpdb->insert($image_table_name,
                            array(
                                'product_id' => $getData['id'],
                                'image_name' => $image,
                                )
                            );
                        }
                    }
                    $ans = 200;
                echo $wpdb->show_errors();
                echo $wpdb->print_error();
            }
    
                return $ans;
        }
        public function productDetail($id)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product';
            $productList = $wpdb->get_results("SELECT * FROM $table_name WHERE `id` ='". $id."'",ARRAY_A);    
            return $productList[0];
        }
        public function productImages($id)
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'product_images';
            $productImage = $wpdb->get_results("SELECT * FROM $table_name WHERE `product_id` ='". $id."'",ARRAY_A);    
            return $productImage;
        }
        
    }
?>