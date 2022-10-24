<?php   
    $option = $_POST['pilihan'];
    if ($option == "cb") {
        ?>
		<form method="POST" action="final.php">
		Masukan Panjang Alas :<br> <input name="p" type="text"><br>
		Masukan Lebar Alas  :<br><input name="l" type="text"><br>
		Masukan Tinggi  :<br> <input name="t" type="text"><br>
		Masukan Opsi operasi <br>
		<select name="pilihan" id="pilihan">
			<option value="lscb">Luas</option>
			<option value="kgcb">Keliling</option>
		</select>
		<input type="submit" value="Submit"><br>
        </form>
		<?php
      }elseif ($option == "tb") {
        ?>
		<form method="POST" action="final.php">
		Masukan Jari-Jari :<br><input name="p" type="text"><br>
		Masukan Tinggi    :<br><input name="t" type="text"><br>
		Masukan Opsi operasi <br>
		<select name="pilihan" id="pilihan">
			<option value="lscr">Luas</option>
			<option value="kgcr">Keliling</option>
		</select>
		<input type="submit" value="Submit">
        </form>
		<?php
      }elseif ($option == "lm") {
        ?>
		<form method="POST" action="final.php">
		Masukan Panjang : <br><input name="p" type="text"><br>
		Masukan Lebar   : <br><input name="l" type="text"><br>
		Masukan Tinggi  : <br><input name="t" type="text"><br>
		Masukan Opsi operasi <br>
		<select name="pilihan" id="pilihan">
			<option value="lsls">Luas</option>
			<option value="kgls">Keliling</option>
		</select>
		<input type="submit" value="Submit">
        </form>
		<?php
      }
	?>