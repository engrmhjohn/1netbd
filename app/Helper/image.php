<?php
use Intervention\Image\Facades\Image;

function document_upload($file, $title = '')
{
    if ($file) {
        if ($file->extension() == 'pdf') {
            $imageName = 'oscl' . '-' . str_replace(' ', '-', $title) . '-' . rand(1, 999) . '.' . $file->extension();
            $directory = 'adminAssets/document-upload/';
            $imgUrl = $directory . $imageName;
            $file->move($directory, $imageName);
            return $imgUrl;
        } else {
            $imageName = time() . rand(1, 999) . '.' . $file->extension();
            $directory = 'adminAssets/document-upload/';
            $imgUrl = $directory . $imageName;
            $file->move($directory, $imageName);
            return $imgUrl;
        }
    }
    return null;
}



function image_upload($image, $title = '')
{
    if ($image) {
        $imageName = time() . rand(1, 999) . '.' . $image->extension();
        $directory = 'adminAssets/upload/';
        $imgUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }
    return null;
}

function delete_image($imagePath){
    if($imagePath){
        $imagePath = public_path($imagePath);
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
    }
}

function image_upload_nid($image, $title = '')
{
    if ($image) {
            // Generate a unique image name
            $imageName = time() . rand(1, 999) . '.webp';
            
            // Set up the directory for uploading
            $directory = 'adminAssets/online-registration/';
            $imgUrl = $directory . $imageName;

            // Resize the image to 336x221 pixels
            Image::make($image->getRealPath())
                ->resize(336, 221)
                ->encode('webp', 20) // You can adjust the compression quality
                ->save($imgUrl);

            return $imgUrl;
    }

    return null;
}

function image_upload_passport_pic($image, $title = '')
{
    if ($image) {

            // Generate a unique image name
            $imageName = time() . rand(1, 999) . '.webp';
            
            // Set up the directory for uploading
            $directory = 'adminAssets/online-registration/';
            $imgUrl = $directory . $imageName;

            // Resize the image to 95x112 pixels
            Image::make($image->getRealPath())
                ->resize(150, 200)
                ->encode('webp', 20) // You can adjust the compression quality
                ->save($imgUrl);

            return $imgUrl;
    }

    return null;
}

function delete_image_special($imagePath){
    if($imagePath){
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
    }
}
