<?php

function getAssetVersion(){
    return $version="v1.12";
}
function redisKey($key='', $type='web')
{
    $version="v1.06";
    return "nex_{$key}_{$version}_$type";
}

function validateSecretKey($key)
{
    $secretKey=env('API_SECRET_KEY');
    //$secretKey="nex@Ny!mQw6hw^*^jKIx";
    return $key==$secretKey;
}
function isEncryptionEnable()
{
    return env('IS_ENCRYPTION_ENABLE') === 'no' ? false : true;
}

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function getRole($req='name'){
    if(isset(\Illuminate\Support\Facades\Auth::user()->roles[0]->$req)){
        $role=\Illuminate\Support\Facades\Auth::user()->roles[0]->$req;
    }else{
        $role='N/A';
    }
    return strtolower($role);
}

function userCan($permissionName){

//    dd($permissionName, auth()->user()->roles);
    //dd(auth()->user()->can($permissionName));
    if(getRole()=='superadmin') return true;
    else{
        if(auth()->user()->can($permissionName)) {
            return true;
        }
        else {
            return false;
        }
    }
}
function inputClass($section="common"){
    $class="";
    if($section=="change-password"){
        $class='w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-[#029397]';
    }elseif($section=="small"){
        $class='w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-[#029397]';
    }elseif($section=="label"){
        $class='block text-gray-700 text-sm font-bold mb-2';
    }elseif($section=="error_text"){
        $class='text-red-600 text-sm font-medium';
    }else{
        $class='w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-[#029397]';
    }
    return $class;
}

function strongPasswordGenerator( $length = 12 ) {
    return "N3x@".generateRandomString($length-4);
}
function isStrongPassword($password)
{
    return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+\-={}[\]|:;"\'<>,.?\/]).{8,}$/', $password);
}
function getMountingTypeName($typeId, $withIcon = 0)
{
    $icon = '';
    $typeName = '';

    switch ($typeId) {
        case 1:
            $icon = '<svg class="w-4 h-4" focusable="false" aria-hidden="true" viewBox="0 0 24 24"><path d="M11.4999 9.00063C11.4999 9.00063 12.0135 7.20309 12.8566 6.00038M11.4999 9.00063L15.1413 12.8592M11.4999 9.00063L9.16049 11.34M12.8566 6.00038C13.19 5.52485 13.5749 5.1423 13.9999 5.00063C15.4999 4.50063 18.9999 7.49968 18.9999 9.49996C18.9999 10.3226 18.4079 10.5613 17.7108 11.1451M12.8566 6.00038L17.7108 11.1451M17.7108 11.1451C16.713 11.9808 15.4999 12.5006 15.4999 12.5006L15.1413 12.8592M15.1413 12.8592L12.4999 15.5006C12.4999 15.5006 10.5 19 8.99998 19.5C7.49998 20 5.99991 18.5006 5.99991 18.5006C5.99991 18.5006 3.99996 16.5 4.49996 15C4.99996 13.5 8.49991 12.0006 8.49991 12.0006L9.16049 11.34M9.16049 11.34L12.8566 15.0004M0.646423 23.6464L5.64642 18.6464M23.3535 0.353516L17.3535 6.35352" stroke="black"></path></svg>'; // Replace with the actual Font Awesome icon class
            $typeName = 'Through Hole';
            break;
        case 2:
            $icon = '<i class="fas fa-microchip"></i>'; // Replace with the actual Font Awesome icon class
            $typeName = 'Embedded';
            break;
        case 3:
            $icon = '<i class="fa-solid fa-plug"></i>'; // Replace with the actual Font Awesome icon class
            $typeName = 'SMD';
            break;
        default:
            $icon = '<i class="fas fa-question"></i>'; // Replace with the actual Font Awesome icon class
            $typeName = 'Unknown Type';
    }

    if ($withIcon == 1) {
        return "<div class='flex flex-col md:flex-row items-center gap-0 md:gap-2 w-full'>{$icon} <span>{$typeName}</span></div>";
    } else {
        return $typeName;
    }
}
function getMountingTypeId($typeName)
{
    $typeName=strtolower($typeName);
    $typeId=0;
    switch ($typeName) {
        case "through hole":
            $typeId=1;
            break;
        case "embedded":
            $typeId=2;
            break;
        case "smd":
            $typeId=3;
            break;
        default:
            $typeId=3;
    }

    return $typeId;
}

function getUserRole(){

}
// Helper function to convert bytes to a human-readable format
function humanFileSize($filePath) {
    if(file_exists($filePath)){
        $size = filesize($filePath);
        $unit ="";
        if ((!$unit && $size >= 1 << 30) || $unit == "GB") {
            return number_format($size / (1 << 30), 2) . " GB";
        }
        if ((!$unit && $size >= 1 << 20) || $unit == "MB") {
            return number_format($size / (1 << 20), 2) . " MB";
        }
        if ((!$unit && $size >= 1 << 10) || $unit == "KB") {
            return number_format($size / (1 << 10), 2) . " KB";
        }
        return number_format($size) . " bytes";
    }else{
        return "0.00KB";
    }


}


function determineLinkType($link)
{
    if (strpos($link, 'youtube.com') !== false || strpos($link, 'youtu.be') !== false) {
        return 'youtube';
    } elseif (preg_match('/\.(jpg|jpeg|png|gif)$/i', $link)) {
        return 'image';
    } elseif (preg_match('/\.(mp4|webm|ogg)$/i', $link)) {
        return 'video';
    } elseif (pathinfo($link, PATHINFO_EXTENSION) == 'pdf') {
        return 'pdf';
    } elseif (preg_match('/\.svg$/i', $link)) {
        return 'svg';
    } else {
        return 'unknown';
    }
}


function jsonDifferenceAsTable($data1, $data2) {
    if (is_string($data1)) {
        $data1 = json_decode($data1, true);
    }
    if (is_string($data2)) {
        $data2 = json_decode($data2, true);
    }

    // Check if $data1 or $data2 is empty
    if (empty($data1) || empty($data2)) {
        return '<p>No data available.</p>';
    }

    // Check if $data1 is not an array or is empty
    if (!is_array($data1) || !isset($data1[0])) {
        return $data1='['.json_encode($data1).']';
    }

    // Check if $data2 is not an array or is empty
    /*if (!is_array($data2) || !isset($data2[0])) {
        error_log("Invalid or empty data2: " . print_r($data2, true));
        return '<p>Invalid data provided for $data2.</p>';
    }*/

    $html = '<table class="whitespace-nowrap">';
    $html .= '<thead><tr>';

    foreach (array_keys($data1[0]) as $key) {
        if($key=='id') continue;
        $html .= "<td class='px-3 font-medium border border-dotted'>$key</td>";
    }
    $html .= '</tr></thead>';
    $html .= '<tbody>';

    foreach ($data1 as $index => $row) {
        $html .= '<tr>';
        foreach ($row as $key => $value) {
            if($key=='id') continue;
            $presentValue = $data2[$index][$key] ?? null;
            if ($presentValue !== $value) {
                $html .= "<td class='border border-dotted p-1 px-3 bg-red-200'>$value</td>";
            } else {
                $html .= "<td class='border border-dotted p-1 px-3'>$value</td>";
            }
        }
        $html .= '</tr>';
    }

    $html .= '</table>';

    return $html;

}
function jsonDifferenceAsTable__OLD($data1, $data2) {
    if (is_string($data1)) {
        $data1 = json_decode($data1, true);
    }
    if (is_string($data2)) {
        $data2 = json_decode($data2, true);
    }

    // Check if $data1 or $data2 is empty
    if (empty($data1) || empty($data2)) {
        return '<p>No data available.</p>';
    }

    // Check if $data1 is not an array or is empty
    if (!is_array($data1) || !isset($data1[0])) {

        return '';
    }

    // Check if $data2 is not an array or is empty
    if (!is_array($data2) || !isset($data2[0])) {
        error_log("Invalid or empty data2: " . print_r($data2, true));
        return '<p>Invalid data provided for $data2.</p>';
    }

    $html = '<table class="whitespace-nowrap">';
    $html .= '<thead><tr>';

    foreach (array_keys($data1[0]) as $key) {
        if($key=='id') continue;
        $html .= "<th>$key</th>";
    }
    $html .= '</tr></thead>';
    $html .= '<tbody>';

    foreach ($data1 as $index => $row) {
        $html .= '<tr>';
        foreach ($row as $key => $value) {
            if($key=='id') continue;
            $presentValue = $data2[$index][$key] ?? null;
            if ($presentValue !== $value) {
                $html .= "<td class='border border-dashed p-1 bg-red-200'>$value</td>";
            } else {
                $html .= "<td class='border border-dashed p-1'>$value</td>";
            }
        }
        $html .= '</tr>';
    }

    $html .= '</tbody>';
    $html .= '</table>';

    return $html;
}

function is_base64_encode($data)
{
    //return false;
    return true;
}
function tripleBase64Encode($data) {
    return base64_encode(base64_encode(base64_encode($data)));
}

function tripleBase64Decode($data) {
    return base64_decode(base64_decode(base64_decode($data)));
}

#################################
# ENC-DEC
#################################


function aesEncrytption($sStr, $apiVersion = 'v1')
{
    $encryptionKey = 'N3X@W2Ce5oH*sTSg';
    $cipher = "aes-128-ecb";
    $options = 0;
    $iv = "";

    if (strlen($encryptionKey) != 16) {
        die("Key must be 16 bytes (128 bits) long.");
    }
    $encryptedData = openssl_encrypt($sStr, $cipher, $encryptionKey, $options, $iv);

    // Check if encryption was successful
    if ($encryptedData === false) {
        die("Encryption failed: " . openssl_error_string());
    }

    return $encryptedData;
}


function aesDecrytption($encryptedData, $apiVersion = 'v1')
{
    //return $encryptedData;
    $cipher = "aes-128-ecb";
    $options = 0;
    $iv = "";
    $encryptionKey = 'N3X@W2Ce5oH*sTSg';
    $decryptedData = openssl_decrypt($encryptedData, $cipher, $encryptionKey, $options, $iv);

    return $decryptedData;
}

function generateShareUrlId($key, $id)
{
    // Serialize the array and then encode it
    return base64_encode(serialize(['key' => $key, 'id' => $id]));
}

function decryptShareUrlId($data)
{
    try {
        return unserialize(base64_decode($data));
    } catch (\Throwable $e) {
        return false;
    }
}




?>


