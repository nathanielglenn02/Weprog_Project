<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Weprog</title>
    <?php
    // Mengecek apakah cookie 'tema' telah ada
    if (isset($_COOKIE['tema'])) {
        // Mendapatkan nilai cookie 'tema' dan mengubahnya menjadi array
        $tema = json_decode($_COOKIE['tema'], true);
    }
    ?>
</head>

<body>

    <header>

        <form method="post">
            <p>
                Theme :
                <select name="theme" id="theme">
                    <option value="" disabled selected>-- Choose Theme --</option>
                    <?php
                    if (!empty($tema)) {
                        foreach ($tema as $t) {
                            echo '<option value="' . $t['theme'] . '">' . $t['theme'] . '</option>';
                        }
                    }
                    ?>
                </select>
                <a href="tambah.php" target="blank">Add New Theme</a>
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