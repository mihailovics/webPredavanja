<!DOCTYPE html>

<head>
    

</head>
<body>
    <?php
         if(isset($_POST["trazi"])){
            $upit = "select * from student where prezime LIKE '" . $_POST['prezime']. "'";
            $rezd = $mysqli->query($upit);
            
            if(!$rezd){
                print("ne moze se izvrsiti upit");
                die($mysqli->errno);
            }
             
            if(!$red = $rezd->fetch_assoc()){
                print("Nema trazenog studenta po prezimenu!<br>");
            }
            else{
                $brIndex = $red["brIndeksa"];
                $prezime = $red["prezime"];
                $ime = $red["ime"];
                $status = $red["status"];
                $sifra = $red["sifra"];
                echo print_r($red);
            }
           
        }
        if(isset($_POST["dodaj"])){
            $brIndex = $_POST["brind"];
            $prezime = $_POST["prezime"];
            $ime = $_POST["ime"];
            $status = $_POST["status"];
            $sifra = $_POST["sifra"];
            
            $upit = "insert into student (prezime, ime, brIndeksa, sifra, status) VALUES 
            ('$prezime', '$ime', '$brIndex','$sifra','$status')";
            $rezd = $mysqli->query($upit);
            if(!$rezd){
                print("ne moze se izvrsiti upit");
                die($mysqli->errno);
            }
            echo "SLOG je DODAT!";
        }
       
    ?>
    <h2>
        Unos i azuriranje podataka o studentima.
    </h2>
    <fieldset style="width: max-content;">
        <legend>Studenti: </legend>
        <form method="post" action="prvi.php">
            <table>
                <tr>
                    <td>Broj indexa:</td>
                    <td><input name="brind" type="text" size="7" value="<?php echo $brIndex;?>"></td>
                </tr>
                <tr>
                    <td>Ime</td>
                    <td><input name="ime" type="text" size="7" value="<?php echo $ime;?>"></td>
                
                    <td>Prezime</td>
                    <td><input name="prezime" type="text" size="7" value="<?php echo $prezime;?>"></td>
                </tr>
                <tr>
                    <td>status:</td>
                    <td>
                        
                        <label>B
                            <input name="status" type="radio" value="B">
                            S
                            <input name="status" type="radio" value="S" >
                        </label>
                     
                        
                    </td>
                    <td>sifra smera:</td>
                    <td><input name="sifra" type="text" size="5" value="<?php echo $sifra;?>"></td>
                </tr>
            </table>
            <br>
            <input class="button button3" type="submit" name="dodaj" value="dodaj">
            <input class="button button3" type="submit" name="trazi" value="trazi">
        </form>
    </fieldset>
</body>

</html>