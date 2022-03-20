<?php include 'controler.php';?>
<html>
<head>
    <title>Kalkulator</title>
    <style>
         table{background:darkgray; padding:10px; border-radius:5px;}
         table input{width:100%; border:0px;}
         table tr td select{width:100%;}
        </style>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Kalkulator</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="angka1" value=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="angka2" value=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <select name="operator">
                        <option> -Pilih Operator Anda- </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="X">X</option>
                        <option value="/">/</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="reset" name="reset" value="C"></td>
                <td><input type="submit" name="submit" value="="></td>
            </tr>
            <tr>
    <?php include 'models.php';?>
</tr>
    </form>
</body>
</html>