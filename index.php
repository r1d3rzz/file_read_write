<?php
    error_reporting(1);

    if (isset($_POST['create'])) {
        $fileName = $_POST['file'];
        $fileExt = $_POST['ext'];
        $file = $fileName.$fileExt;//like that test.txt

        $data = $_POST['data'];//for your text data

        if (file_exists($file)) {
            echo "<script>alert('Your file is already exits.')</script>";
        } else {
            $fo = fopen($file, "w");
            fwrite($fo, $data);
            echo "<script>alert('Your data is save.')</script>";
        }
    }
?>

<form method="POST">
    <table border="1">
        <tr>
            <td>Write Your File name</td>
            <td><input type="text" name="file" id=""></td>
        </tr>
        <tr>
            <td>Select Your file extention</td>
            <td>
                <select name="ext" id="">
                    <option value=".txt">txt</option>
                    <option value=".html">html</option>
                    <option value=".css">css</option>
                    <option value=".js">js</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Enter Your Data</td>
            <td><textarea name="data" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="create" name="create">
            </td>
        </tr>
    </table>
</form>
