<?php
// Inisialisasi variabel $tema sebagai array kosong
$tema = array();
// Pastikan $tema tidak kosong sebelum mengakses elemen-elemennya
if (!empty($tema)) {
    // Mengakses elemen-elemen dalam array $tema
    $bgColor = $tema['warna_bg'];
    $h1Color = $tema['warna_h1'];
    $alignment = $tema['alignment'];
    $pColor = $tema['warna_paragraph'];
    $fontSize = $tema['font_size'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $tema = json_decode($_COOKIE['tema'], true) ?? array();
    $selectedTheme = $_GET['theme'];

    foreach ($tema as $t) {
        if ($t['theme'] == $selectedTheme) {
            // Jika tema yang dipilih ditemukan, perbarui variabel-variabel style
            $bgColor = $t['warna_bg'];
            $h1Color = $t['warna_h1'];
            $alignment = $t['alignment'];
            $pColor = $t['warna_paragraph'];
            $fontSize = $t['font_size'];
            break; // Hentikan loop karena tema sudah ditemukan
        }
    }
    ?>
</head>

<body>
    <form action="" method="post">
        <p>
        <p>
            Theme :
            <input type="text" id="theme" name="theme" value=<?= $selectedTheme ?>>
        </p>
        <p>
            Color of Page Backgorund :
            <input type="color" id="warna-bg" name="warna-bg" value=<?= $bgColor ?>>
        </p>
        <p>
            Color of Heading 1 :
            <input type="color" id="warna-h1" name="warna-h1" value=<?= $h1Color ?>>
        </p>
        <p>
            Alignment of Heading 1 :
            <select name="alignment" id="alignment">
                <?php if ($alignment == "left") {
                    echo "<option disabled>-- Choose The Alignment --</option>
                    <option selected value=\"left\">Left</option>
                    <option value=\"center\">Center</option>
                    <option value=\"right\">Right</option>";
                } else if ($alignment == "center") {
                    echo "<option disabled>-- Choose The Alignment --</option>
                    <option value=\"left\">Left</option>
                    <option selected value=\"center\">Center</option>
                    <option value=\"right\">Right</option>";
                } else {
                    echo "<option disabled>-- Choose The Alignment --</option>
                    <option value=\"left\">Left</option>
                    <option value=\"center\">Center</option>
                    <option selected value=\"right\">Right</option>";
                } ?>
            </select>

        </p>
        <p>
            Color of Paragraph :
            <input type="color" id="warna-p" name="warna-p" value=<?= $pColor ?>>
        </p>
        <p>
            Font Size of Paragraph :
            <input type="number" min="10" max="24" id="font-sz" name="font-sz" value=<?= $fontSize ?>>

        </p>
        <button type="submit" name="edit">Save</button>

        </p>

    </form>
    <?php
    if (isset($_POST['edit'])) {
        function searchForId($id, $array) {
            foreach ($array as $key => $val) {
                if ($val['theme'] === $id) {
                    return $key;
                }
            }
            return null;
        }
        $theme = $_POST["theme"];
        $warna_bg = $_POST["warna-bg"];
        $warna_h1 = $_POST["warna-h1"];
        $alignment = $_POST["alignment"];
        $warna_paragraph = $_POST["warna-p"];
        $font_size = $_POST["font-sz"];
        // foreach ($tema as $t) {
        //     if ($t['theme'] == $selectedTheme) {
        //         // Jika tema yang dipilih ditemukan, perbarui variabel-variabel style
        //         $t['theme'] = $theme
        //         $t['warna_bg'] = $warna_bg;
        //         $t['warna_h1'] = $warna_h1;
        //         $t['alignment'] = $alignment;
        //         $t['warna_paragraph'] = $warna_paragraph;
        //         $t['font_size'] = $font_size;
        //         break; // Hentikan loop karena tema sudah ditemukan
        //     }
        // }

        // Membuat objek tema baru
        $tema_baru = array(
            'theme' => $theme,
            'warna_bg' => $warna_bg,
            'warna_h1' => $warna_h1,
            'alignment' => $alignment,
            'warna_paragraph' => $warna_paragraph,
            'font_size' => $font_size
        );

        //Menyimpan tema baru ke dalam cookie 'tema'
        if (isset($_COOKIE['tema'])) {
            $selectedTheme = $_GET['theme'];
            $tema_sebelumnya = json_decode($_COOKIE['tema'], true);
            
            $arr_index = searchForId($selectedTheme, $tema_sebelumnya);
            $tema_sebelumnya[$arr_index] = $tema_baru;
            var_dump($tema_sebelumnya);
            setcookie("tema", json_encode($tema_sebelumnya), time() + 6000);
            header("Location: edit.php?theme=" . $_POST['theme']);
            exit(); // Pastikan untuk keluar dari skrip setelah redirect
        } else {
            $tema_sebelumnya = array($tema_baru);
            setcookie("tema", json_encode($tema_sebelumnya), time() + 6000);
        }
    }
    ?>
</body>

</html>