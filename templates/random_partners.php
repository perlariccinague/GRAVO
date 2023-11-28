<?php
$files = scandir('files/inhalte/partner');
$files_count = count((array)($files))-4;

function getRandoms($quant=1, $min=0, $max=1){
    $randary = array();
    while(!(count($randary) >= $quant || count($randary) > $max-$min))
        $randary[mt_rand($min,$max)] = true;
    return array_keys($randary);
}

$randoms = getRandoms(4, 1, $files_count);

$dir = "files/inhalte/partner";
$file_array = Array();
if (is_dir($dir)) {
    $handle = opendir($dir);
    if (is_resource($handle)) {
        while ($file = readdir($handle)) {
            if ($file != "." && $file != ".." && $file != ".public")
                array_push($file_array, $file);
        }
    } else {
        echo "Das Öffnen des Verzeichnisses ist fehlgeschlagen";
    }
} else {
    echo "Das Verzeichnis existiert nicht";
}

?>

<div class="sponsors">
    <div class="ce_image sponsor" >
        <a href="{{link_url::11}}"><img src="files/inhalte/partner/<?php echo $file_array[$randoms[0]] ?>" alt=""></a>
    </div>
    <div class="ce_image sponsor">
        <a href="{{link_url::11}}"><img src="files/inhalte/partner/<?php echo $file_array[$randoms[1]] ?>" alt=""></a>
    </div>
    <div class="ce_image sponsor">
        <a href="{{link_url::11}}"><img src="files/inhalte/partner/<?php echo $file_array[$randoms[2]] ?>" alt=""></a>
    </div>
    <div class="ce_image sponsor">
        <a href="{{link_url::11}}"><img src="files/inhalte/partner/<?php echo $file_array[$randoms[3]] ?>" alt=""></a>
    </div>
</div>

