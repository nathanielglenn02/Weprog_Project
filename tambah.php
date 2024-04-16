<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
</head>

<body>
    <form action="tambah.php" method="post">
        <p>
        <p>
            Theme :
            <input type="text" id="theme" name="theme">
        </p>
        <p>
            Color of Page Backgorund :
            <input type="color" id="warna-bg" name="warna-bg">
        </p>
        <p>
            Color of Heading 1 :
            <input type="color" id="warna-h1" name="warna-h1">
        </p>
        <p>
            Alignment of Heading 1 :
            <select name="alignment" id="alignment">
                <option selected>-- Choose The Alignment --</option>
                <option value="left">Left</option>
                <option value="center">Center</option>
                <option value="right">Right</option>
            </select>
        </p>
        <p>
            Color of Paragraph :
            <input type="color" id="warna-p" name="warna-p">
        </p>
        <p>
            Font Size of Paragraph :
            <input type="number" min="10" max="24" id="font-sz" name="font-sz">

        </p>
        <button type="submit" name="kirim">Save</button>

        </p>

    </form>
    <?php
    if (isset($_POST['kirim'])) {
        $theme = $_POST["theme"];
        $warna_bg = $_POST["warna-bg"];
        $warna_h1 = $_POST["warna-h1"];
        $alignment = $_POST["warna-h1"];
        $warna_paragraph = $_POST["warna-p"];
        $font_size = $_POST["font-sz"];

        // Membuat objek theme
        $tema_baru = array(
            'theme' => $theme,
            'warna_bg' => $warna_bg,
            'warna_h1' => $warna_h1,
            'alignment' => $alignment,
            'warna_paragraph' => $warna_paragraph,
            'font_size' => $font_size
        );

        // Mengecek apakah cookie 'tema' sudah ada
        if (isset($_COOKIE['tema'])) {
            // Mendapatkan nilai cookie 'tema' dan mengubahnya menjadi array
            $tema_sebelumnya = json_decode($_COOKIE['tema'], true);

            // Menambahkan objek tema baru ke dalam array tema sebelumnya
            $tema_sebelumnya[] = $tema_baru;

            // Mengubah array tema menjadi string JSON dan menyimpannya kembali dalam cookie 'tema'
            setcookie("tema", json_encode($tema_sebelumnya), time() + 6000);
        } else {
            // Jika cookie 'tema' belum ada, maka buat array baru dengan tema baru
            $tema_sebelumnya = array($tema_baru);
            setcookie("tema", json_encode($tema_sebelumnya), time() + 6000);
        }
    }
    ?>
</body>

</html>