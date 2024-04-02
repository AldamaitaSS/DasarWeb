<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
    </head>
    <body>
        <h1>Form Input dnegan Validasi</h1>
        <form method="post" action="proses_validasi.php">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <br>
            <br>

            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function() {
                $("myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-erro").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").tetx("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (!valid) {
                        event.preventDefault();
                        // Mengerti pengiriman form jika validasi gagal
                    }

                });
            });
        </script>
    </body>
</html>