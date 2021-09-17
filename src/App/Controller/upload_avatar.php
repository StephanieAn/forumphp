<?php 


function uploadAvatar($file){

    $name = $file;
    $target_dir = "upload/";
    $target_file = $target_dir . basename($file);
    
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
    
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
      // Upload file
      if(move_uploaded_file($_FILES['avatar']['tmp_name'],$target_dir.$name)){
         // Convert to base64 
         $image_base64 = base64_encode(file_get_contents('upload/'.$name) );
         $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
         // Insert record
         return $image;
      }
      
    }

}


?>