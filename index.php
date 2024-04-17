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
    <title>Project Weprog</title>
    <?php
    // Ambil data tema dari cookie jika ada
    $tema = json_decode($_COOKIE['tema'], true) ?? array();

    if (isset($_POST['theme'])) {
        // Ambil nilai tema yang dipilih dari combobox
        $selectedTheme = $_POST['theme'];

        // Loop melalui tema yang tersimpan untuk menemukan tema yang dipilih
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
    }
    ?>

    <style>
        .bgColor {
            background-color: <?= $bgColor ?>;
        }

        .h1Color {
            color: <?= $h1Color ?>;
        }

        .alignment {
            text-align: <?= $alignment ?>;
        }

        .pColor {
            color: <?= $pColor ?>;
        }

        .fontSize {
            font-size: <?= $fontSize ?>px;
        }
    </style>
</head>

<body class="bgColor fontSize">

    <header>

        <form method="post">
            <p>
                Theme :
                <select name="theme" id="theme">
                    <option selected disabled>-- Choose Theme --</option>";
                    <?php foreach ($tema as $t) {
                        if ($t['theme'] == $selectedTheme) {
                            echo '<option selected value="' . $t['theme'] . '">' . $t['theme'] . '</option>';
                        } else {
                            echo '<option value="' . $t['theme'] . '">' . $t['theme'] . '</option>';
                        }
                    } ?>

                </select>
                <a href="tambah.php" target="blank">Add New Theme</a>
            </p>
            <p>
                <input type="submit" name="choose" value="Choose the Theme"></input>
                <input type="submit" name="edit" value="Edit the Theme"></input>
            </p>
        </form>
        <hr>
    </header>
    <?php
    if (isset($_POST['edit'])) {
        // Redirect ke halaman edit.php dengan mengirimkan data tema yang dipilih
        header("Location: edit.php?theme=" . $_POST['theme']);
        exit(); // Pastikan untuk keluar dari skrip setelah redirect
    }
    ?>

</html>
<h1 class="h1Color alignment">Heading 1</h1>
<p class="pColor">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat repudiandae optio deserunt architecto
    saepe ad
    fugiat dolorem fuga aliquid repellendus recusandae quas sit sunt molestiae cum, explicabo mollitia est odit.
    Esse sunt a maxime tempora. Officiis saepe quae explicabo ut enim possimus perferendis, impedit, optio
    repudiandae esse, tenetur deleniti aspernatur ratione. Placeat veritatis dolores cumque ullam fugit
    voluptatibus
    architecto blanditiis iste corrupti cupiditate. Vero aut autem ad assumenda recusandae eligendi animi minus
    fugit deleniti consequuntur quidem, beatae molestiae similique ratione corrupti pariatur id sunt! Ipsum nisi
    blanditiis earum in hic laudantium dicta aut vel, ullam obcaecati commodi, animi eaque corporis.
</p>
<p class="pColor">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, ipsa nemo aliquam ullam incidunt,
    voluptatibus,
    quisquam hic tempore illum adipisci saepe modi optio explicabo culpa mollitia dignissimos maxime
    exercitationem
    molestiae voluptas esse perferendis aut unde! Rerum, aliquam nam fuga, dolorum quia explicabo a laudantium
    culpa
    porro ducimus quos, expedita incidunt? Adipisci animi ab explicabo consequuntur rem fugiat totam eum magni.
</p>

</body>

</html>