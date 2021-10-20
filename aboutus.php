<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        
        div.gallery {
            margin: 25px;
            border: 1px solid rgb(231, 11, 11);
            float: left;
            width: 190px;
        }
        
        div.gallery img {
            width: 100%;
            height: auto;
        }
        
        div.gallery:hover {
            border: 1px solid rgb(46, 48, 190);
        }
        
        html {
            box-sizing: border-box;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }
        
        .column {
            float: left;
            width: 50%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: grey;
        }
        
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        
        .button:hover {
            background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
        
        .information {
            padding: 30px;
            /* text-align: center;*/
            background-color: #474e5d;
            color: white;
        }
        
        nav {
            float: left;
            width: 30%;
            height: 290px;
            /* only for demonstration, should be removed */
            background: yellow;
            padding: 40px;
        }
        /* Style the list inside the menu */
        
        nav ul {
            list-style-type: none;
            padding: 0;
            /*   background-color: yellow;*/
        }
        
        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #f1f1f1;
            height: 290px;
            /* only for demonstration, should be removed */
        }
        /* Clear floats after the columns */
        
        section:after {
            content: "";
            display: table;
            clear: both;
        }
        
        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
        
        li {
            margin: 25px 0;
        }
        
        a:link,
        a:visited {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        
        a:hover,
        a:active {
            background-color: rgb(180, 7, 143);
        }
        
        footer {
            background-color: #474e5d;
            padding: 20px;
            /*  text-align: center;*/
            color: white;
        }
    </style>
</head>

<body>
    <div class="about-section">
        <img src="https://www.flaticon.com/svg/static/icons/svg/52/52782.svg" width="100" height="100">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <!--  <p>Resize the browser window to see that this page is responsive by the way.</p>-->
    </div>
    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <!-- <img src="koala.jpg" alt="Jane" style="width:50%">-->
                <div class="container">
                    <h2>Sweta Kumari</h2>
                    <p class="title">Student</p>
                    <p>CSE Department LNCTS, Bhopal</p>
                    <p>shwetakumari8400@gmail.com</p>
                    <!--  <p><button class="button">Contact</button></p>-->
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <!--  <img src="bg.png" alt="Mike" style="width:50%">-->
                <div class="container">
                    <h2>Rutuja Deokar</h2>
                    <p class="title">Student</p>
                    <p>CSE Department LNCTS, Bhopal</p>
                    <p>rutuja.deokarrd@gmail.com</p>
                    <!--  <p><button class="button">Contact</button></p>-->
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <!-- <img src="koala.jpg" alt="John" style="width:50%">-->
                <div class="container">
                    <h2>Shruti shukla</h2>
                    <p class="title">Studentr</p>
                    <p>CSE Department LNCTS, Bhopal</p>
                    <p>shuklashruti1806@gmail.com</p>
                    <!--  <p><button class="button">Contact</button></p>-->
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <!-- <img src="bg.png" alt="John" style="width:50%">-->
                <div class="container">
                    <h2>Sarthak Tare</h2>
                    <p class="title">Student</p>
                    <p>CSE Department LNCTS, Bhopal</p>
                    <p>sarthaktare14@gmail.com</p>
                    <!--  <p><button class="button">Contact</button></p>-->
                </div>
            </div>
        </div>
    </div>

    <div class="information">
        <h2>WE ARE PROVIDING JOBS</h2>
        <p>So join our website and get a job, don't become lazy,if you work hard then you will get a success.</p>
    </div>
    <section>
        <nav>

            <ul>
                <li><a href="#">VISION AND MISSION</a></li>
                <li><a href="#">DIRECTORS DESK</a></li>
                <li><a href="#">COMPANY PROFILE</a></li>
            </ul>


        </nav>


        <article>
            <!-- <h1>London</h1>-->
            <div class="gallery">
                <img src="https://www.flaticon.com/svg/static/icons/svg/52/52762.svg" width="240" height="160">
            </div>
            <div class="gallery">
                <img src="https://www.flaticon.com/svg/static/icons/svg/53/53011.svg" width="240" height="160">
            </div>
            <div class="gallery">
                <img src="https://www.flaticon.com/svg/static/icons/svg/52/52769.svg" width="240" height="160">
            </div>
            <div class="gallery">
                <img src="https://www.flaticon.com/svg/static/icons/svg/52/52928.svg" width="240" height="160">
            </div>

        </article>
    </section>
    <footer>
        <h1>QUICK INFORMATION</h1>
        <p>Head Office: PB-5, Block C, Top Floor, Rajeev Complex, Shivaji Nagar Bhopal 462016 Phone: 0755-42716789, 4273699 Branch Office: 42, Sector A, Indrapuri, Opposite BHEL Gate No.1, Raisen Road, Bhopal – 462023 Ph.: 0755-4939665, 0755-4274678</p>
    </footer>




</body>

</html>