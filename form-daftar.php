<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | Digital Talent</title>
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
        }

        /* Container background image */
        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('01.jpg') no-repeat center center/cover;
            opacity: 0.7;
            z-index: 0;
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
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.5); /* Fallback color if image fails to load */
        }

        header h3 {
            font-weight: normal;
            position: relative;
            z-index: 1;
            margin: 0;
        }

        /* Form styles */
        form {
            position: relative;
            z-index: 1;
            text-align: left; /* Align form elements to left */
        }

        fieldset {
            border: none;
            padding: 0;
        }

        p {
            margin: 10px 0;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
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
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" placeholder="alamat lengkap"></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>

