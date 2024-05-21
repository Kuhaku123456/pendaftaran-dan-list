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
            text-align: center;
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
            opacity: 1;
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
        }

        header h1 {
            font-size: 2.5em;
            letter-spacing: 1px;
        }

        header h3 {
            font-weight: normal;
        }

        /* Navigation menu styles */
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin-top: 10px;
            z-index: 1;
            position: relative;
        }

        nav ul li {
            display: inline-block;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        nav ul li a:hover {
            background-color: #45a049;
        }

        /* Content heading styles */
        h4 {
            text-align: center;
            margin: 20px 0;
            font-size: 1.5em;
            font-weight: bold;
            color: #4CAF50;
            z-index: 1;
            position: relative;
        }

        /* Responsive design for mobile users */
        @media (max-width: 600px) {
            nav ul li {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>Digital Talent</h1>
        </header>

        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">Pendaftaran</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
