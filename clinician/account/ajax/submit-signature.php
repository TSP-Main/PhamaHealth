<?php include "../../../private/settings.php"; 

if ($_POST['signed'] != "") {
    $folderPath = PATH . "signature/uploads/";

    // Decode the base64 string
    $image_parts = explode(";base64,", $_POST['signed']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);

    // Create an image from the decoded data
    $source_image = imagecreatefromstring($image_base64);
    if (!$source_image) {
        echo 'Signature did not update, please contact admin';
        exit;
    }

    // Get original dimensions
    $orig_width = imagesx($source_image);
    $orig_height = imagesy($source_image);

    // Set new dimensions (width 350px)
    $new_width = 350;
    $new_height = intval(($orig_height / $orig_width) * $new_width);

    // Create a new true color image
    $resized_image = imagecreatetruecolor($new_width, $new_height);

    // Preserve transparency for PNG and GIF
    if ($image_type == 'png' || $image_type == 'gif') {
        imagealphablending($resized_image, false);
        imagesavealpha($resized_image, true);
    }

    // Resize the image
    imagecopyresampled($resized_image, $source_image, 0, 0, 0, 0, $new_width, $new_height, $orig_width, $orig_height);

    // Create a unique filename
    $image_name = uniqid() . time() . '.' . $image_type;
    $file = $folderPath . $image_name;

    // Save the resized image
    if ($image_type == 'png') {
        imagepng($resized_image, $file);
    } elseif ($image_type == 'jpeg' || $image_type == 'jpg') {
        imagejpeg($resized_image, $file, 90); // Adjust quality if needed
    } elseif ($image_type == 'gif') {
        imagegif($resized_image, $file);
    } else {
        echo 'Unsupported image type.';
        exit;
    }

    // Clean up
    imagedestroy($source_image);
    imagedestroy($resized_image);

    // Update the database
    $update = array(
        'pres_signature' => $image_name
    );
    $where_clause = array(
        'pres_id' => $_SESSION['sess_prescriber_id']
    );
    $updated = $database->update('tbl_prescribers', $update, $where_clause, 1);

    echo "1";
}

?>