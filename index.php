<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Weprog</title>
</head>

<body>

    <?php
    if (isset($_POST['kirim'])) {
        /*  $theme = $_POST['theme'];
        $warna_bg = $_POST['warna-bg'];
        $warna_h1 = $_POST['warna-h1'];
        $alignment = $_POST['alignment'];
        $warna_p = $_POST['warna-p'];
        $font_sz = $_POST['font-sz']; */
        $data = $_POST['data'];
        foreach ($data as $item) {
            echo $item . "<br>";
        }
    }
    echo "<br>";
    $nested_arr = array($data[0] => $data);
    // array_push($nested_arr, $data);
    print_r($nested_arr);

    /*  echo "
<p>Tema = $theme </p>
<p>Warna BG = $warna_bg </p>
<p>Warna H1 = $warna_h1 </p>
<p>Alignment = $alignment </p>
<p>Warna P = $warna_p </p>
<p>Font SZ = $font_sz</p>
";
    $arr_test = array($theme, $warna_bg, $warna_h1, $alignment, $warna_p, $font_sz);
    print_r($arr_test);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $nested_arr = array($theme => $arr_test);
    print_r($nested_arr);
 */
    ?>
    <header>

        <form method="post">
            <p>
                Theme :
                <select name="theme" id="theme">
                    <option value="" disabled selected>-- Choose Theme --</option>
                    <!-- <option value="male">Laki-laki</option> -->
                </select>
                <a href="tambah.php">Add New Theme</a>
            </p>
            <p>
                <input type="submit" name="choose" value="Choose the Theme"></input>
                <input type="submit" name="edit" value="Edit the Theme"></input>
            </p>
        </form>

    </header>

    <h1>Heading 1</h1>
    <p>
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
    <p>
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