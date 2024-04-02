<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <!-- Melakukan validasi input pada formulir sebelum mengirimkan data ke server -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form method="post" action="proses_validasi.php">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color : red;"></span>
            <br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color : red;"></span>
            <br>
            
            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color : red;"></span>
            <br>

            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function() {
                $("myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-erro").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (password.length < 8) {
                        $("#password-error").text("Password harus minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    if (!valid) {
                        // Menggunakan AJAX untuk mengirimkan data ke server
                        $.ajax({
                            type: "POST",
                            url: "proses_validasi.php",
                            data: $("#myForm").serialize(), 
                            success: function(response) {
                                //Menampilkan hasil respons dari server
                                $("#result").html(response);
                            }
                        });
                        event.preventDefault();
                    }

                });
            });
        </script>
    </body>
</html>