<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan HP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="POST" action="proses_lanjut.php">
            <label for="buah">Pilih Buah : </label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih Warna Favorite : </label><br>
            <input type="checkbox" name="warna[]" value="merah"> Merah<br>
            <input type="checkbox" name="warna[]" value="biru"> Biru<br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

            <br>

            <label>Pilih Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

            <br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan di sini -->
        </div>

        <script>
            $(document).ready(function(){
                $("#myForm").submit(function(e){
                    e.preventDefault();

                    var formData = $("#myForm").serialize();

                    s.ajax ({
                        url : "proses_lanjut.php",
                        type: "POST",
                        data: formData,
                        succes: function(response) {
                            //Tampilkan hasil dari server di div "hasil"
                            $("hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>