<style type="text/css">
    body{
        background-color: #A9A9A9;
    }
    h2{
        text-align: center;
        font-family: comic sans ms;
    }
    p{
        font-family: comic sans;
        font-size: 16px;
    }
    form{
        align : center;
    }
    .wrap{
        margin: auto;
        width: 50%;
        border-radius: 10px;
        border-color: black;
    }
</style>
<body>
    <h2 >Berapa harga bet mu?</h2>
    <p align="center">Form ini akan menentukan berapa uang yang harus kamu lakukan untuk membuat bet sesuai nama kamu "-"</p><br>


    <?php
        function bet($name, $color="red"){
            $space  = substr_count($name, " ");
            $length = strlen($name) - $space;
            if($length > 20 ){
                $harga = 700;
            }elseif($length >= 11){
                $harga = 500;
            }elseif($length >= 1){
                $harga = 300;
            }else{
                $harga = 0;
            }
            $total = ($length - $space)* $harga;
            echo '<font color="' .$color .'">Nama   : ' .$name .'</font><br>';
            echo '<font color="' .$color .'">Total  : Rp.' .$total .'</font><br>';
        }
    ?>
        <div class=wrap>    
            <form method="post">
                <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td><input type="color" name="warna" value="#ff0000"></td>
                </tr>
                </table>
                <button type="submit" name="kirim">submit</button>
            </form><br>
        </div>    
</body>
<?php
    if(isset($_POST['kirim'])){
        bet($_POST['nama'], $_POST['warna']);
    }
?>
