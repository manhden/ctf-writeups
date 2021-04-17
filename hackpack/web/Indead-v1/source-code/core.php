 <?php 

$uploadOk = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = basename($_FILES["avatar"]["name"]);
    $target_dir = "very_long_directory_path/";
    $target_file = $target_dir . $filename;
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if($check === false) {
        exit(sprintf('%s is not an image', $filename));
    }

    // Check file size
    if ($_FILES["avatar"]["size"] > 500000) {
        exit(sprintf('%s is too large', $filename));
    }

    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        $uploadOk = 1;
    } else {
        exit("Sorry, there was an error uploading your file.");
    }

}
?> 