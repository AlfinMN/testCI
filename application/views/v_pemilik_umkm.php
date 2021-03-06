<!DOCTYPE html>
<html>

<head>
    <title>testing</title>
</head>

<body>

    <table border="1px solid black">
        <tr>
            <th> ID </th>
            <th> NAMA </th>
            <th> PRODUK </th>
        </tr>

        <?php foreach ($pemilikUmkm as $pumkm) : ?>
            <tr>
                <td> <?php echo $pumkm['id']; ?> </td>
                <td> <?php echo $pumkm['nama']; ?> </td>
                <td> <?php echo $pumkm['produk']; ?> </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>