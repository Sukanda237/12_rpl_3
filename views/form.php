<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input,
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .tombol {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <center>
        <h2>Tambah User</h2>
        <!-- form action berfungsi untuk mengarahkan form inputan user ke contoller user  -->
        <form action="../controllers/c_user.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <input type="text" id="id_user" name="id_user" hidden>
                    <td><input type="text" name="username" id="username" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td><label for="nama_user">Nama:</label></td>
                    <td><input type="text" name="nama_user" id="nama_user"></td>
                </tr>
                <tr>
                    <td><label for="alamat_user">Alamat:</label></td>
                    <td><input type="text" name="alamat_user" id="alamat_user"></td>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
                    <td><select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="tempatlahir_user">Tempat Lahir:</label></td>
                    <td><input type="text" name="tempatlahir_user" id="tempatlahir_user"></td>
                </tr>
                <tr>
                    <td><label for="tanggallahir_user">Tanggal Lahir:</label></td>
                    <td><input type="date" name="tanggallahir_user" id="tanggallahir_user"></td>
                </tr>
                <tr>
                    <td>
                        <!-- <button type="submit">Submit</button> -->

                        <input type="submit" class="tombol" name="tambah" value="kirim">

                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>