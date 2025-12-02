    <style>
        body {
            background: linear-gradient(to right, lightgreen, #ffe4f2);
            font-family: 'Wicked Font', sans-serif;
            color: #7a0050;
            padding: 20px;
        }
        .shopName {
            font-family: 'Wicked Font Hollow', sans-serif;
            text-align: center;
            font-size: 60px;
            background: linear-gradient(to right, black, green, hotpink, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;  
        }
        img {
            display: block;
            margin: 0 auto;
            margin-top: 30px;
            height: 42%;
            width: 30%;
        }
        p {
            text-align: center;
            font-size: 30px;
        }
        @font-face {
            font-family: 'Wicked Font';
            src: url('Wicked Font/WickedFont-Regular-BF65f34594abb81.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Wicked Font Hollow';
            src: url('Wicked Font/WickedFontHollow-Regular-BF65f3459671da4.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
<body>
    <h1 class="shopName">Start Shopping with us in OZ!</h1>
    <?php include 'include/header.php'; ?>
    <img src="WICKED.webp" alt="Glinda and Elphaba">
    <?php include 'include/footer.php'; ?>
</body>