<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web Layout</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100hv;
            margin: 0;
            padding: 20px;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arianl, sans-serif;
            box-sizing: border-box;
        }
        .container {
            display: grid;
            grid-template-areas: 
                "top-left top-right"
                "button button"
                "button-left button-right" button-text;
            gap: 20px;
            text-align: center;
            position: relative;
        }
        .box {
            width: 150px;
            height: 200px;
            border: 2px solid wheat;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .box-top-left {
            grid-area: top left;
        }
        .box-bottom-right {
            grid-area: bottom right;
        }
        .text {
            color: white;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            line-height: 1.6;
            text-align: left;
        }
        .text-top-right {
            grid-area: top right;
        }
        .text-bottom-left {
            grid-area: bottom left;
        }
        .text-bottom {
            grid-area: bottom text;
            position: absolute;
            bottom: 50px;
            left: 0;
            right: 0;
            margin: 0 auto;
            padding: 10px;
            font-size: 12px;
            line-height: 1.4;
        }
        .button {
            grid-area: button;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: white;
            color: black;
            margin: auto;
        }
    </style>
</head>
<body>
    <audio autoplay>
        <source src="lagu1.mp3" type="audio/mpeg">
    </audio>
    <div class="container">
        <div class="box box-top-left">
            <img src="foto1.jpg" alt="Image 1">
        </div>
        <div class="text text-top-righat">
            Hai wanita cantik, wanita baik, wanita kuat, selamat ulang tahun ya bocilku
        </div>
        <button class="button">Balas</button>
        <div class="text text-button-left">
            semoga kita bisa lebih lama lagi bersamanya
        </div>
        <div class="box box-button-right">
            <img src="foto1.jpg" alt="Image 2">
        </div>
        <div class="text text-bottom">
            selamat hari jadi bocilku
        </div>
    </div>
</body>
</html>