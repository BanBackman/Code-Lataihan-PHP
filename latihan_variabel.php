<html>
<head>
    <title>Menghitung Volume Balok</title>
</head>
<body>
    <h1>Form Hitung Volume Balok Dengan PHP</h1>
<form action="./" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Panjang</td>
            <td>:</td>
            <td><input type="text" name="panjang" required> </td>
        </tr>
        <tr>
            <td>Lebar</td>
            <td>:</td>
            <td><input type="text" name="lebar" required> </td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><input type="text" name="tinggi" required> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Tentukan" </td>
        </tr>
    </table>
            </form>
            <?php
            if(isset($_POST['submit'])) {
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $tinggi = $_POST['tinggi'];
                
            
             
            $VolumeBalok = $panjang * $lebar * $tinggi;

                echo "diketahui : <br />";
                echo "panjang = $panjang<br ?>";
                echo "lebar = $lebar<br />";
                echo "tinggi = $tinggi<br />";
                echo "Maka Volume Balok = panjang x lebar x tinggi = $VolumeBalok";
        }
            ?>
    </body>
</html>