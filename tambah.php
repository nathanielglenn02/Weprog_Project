<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
</head>

<body>
    <form action="index.php" method="post">
        <p>
        <p>
            Theme :
            <input type="text" id="theme" name="data[]">
        </p>
        <p>
            Color of Page Backgorund :
            <input type="color" id="warna-bg" name="data[]">
        </p>
        <p>
            Color of Heading 1 :
            <input type="color" id="warna-h1" name="data[]">
        </p>
        <p>
            Alignment of Heading 1 :
            <select name="data[]" id="alignment">
                <option selected>-- Choose The Alignment --</option>
                <option value="left">Left</option>
                <option value="center">Center</option>
                <option value="right">Right</option>
            </select>
        </p>
        <p>
            Color of Paragraph :
            <input type="color" id="warna-p" name="data[]">
        </p>
        <p>
            Font Size of Paragraph :
            <input type="number" min="1" max="100" id="font-sz" name="data[]">

        </p>
        <button type="submit" name="kirim">Save</button>

        </p>

    </form>

</body>

</html>