<?php
    function EsteImagine($nume_fisier)
    {
        /// returneaza true sau false dupa cum $nume_fisier are sau nu extensie de imagine
        $v = explode(".", $nume_fisier);
        $ext = strtolower(end($v));
        return in_array($ext , [ 'jpg', 'jpeg', 'webp', 'png', 'gif', 'bmp' ]);
    }

    function NumeNou($nume_fisier)
    {
        $v = explode(".", $nume_fisier);
        $ext = strtolower(end($v));
        return sha1($nume_fisier.time().rand(1,1000000000)).".".$ext;
    }
    ?>
