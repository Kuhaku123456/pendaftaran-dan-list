<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | Digital Talent</title>
    <style>
        /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        /* Reset default styles for consistency */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles with animated gradient background */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(-45deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
            background-size: 400% 400%;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            animation: gradientBG 15s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Container for overall page layout */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left; /* Align text to left */
            position: relative;
            overflow: hidden;
            z-index: 1; /* Set higher z-index for the container */
        }

        /* Header styles */
        header {
            position: relative;
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Fallback color if image fails to load */
        }

        header h3 {
            font-weight: normal;
            position: relative;
            z-index: 1;
            margin: 0;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Navigation styles */
        nav a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45a049;
        }

        /* Responsive design for mobile users */
        @media (max-width: 600px) {
            input[type="text"],
            textarea,
            select {
                width: calc(100% - 12px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>

        <nav>
            <a href="form-daftar.php">[+] Tambah Baru</a>
        </nav>

        <br>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody> 
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>
