<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        h1{
            color: white;
            background: none;
            font-size: 50px;
            text-align: left;
            background-color:rgba(0, 0, 0, 0);
        }
       #Home p{
            color: white;
            background: none;
            text-align: left;
            font-size: 30px;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .header{
             margin-left: 100px;
             margin-top: 100px;
        }
        nav{
            position: fixed;
            top: 20px;
            left: 30px;
            display: flex;
            justify-content: center;
            padding: 10px;
            font-size: 20px;
            background-color: darkcyan;
        }
        a{
            margin-right: 10px;
            background: none;
            text-align: center;
            text-decoration: none;
            color: aliceblue;
            padding: 15px;
        }
        a:hover{
            background-color: cornflowerblue;
            border-radius: 10px;
        }
        .About{
            text-align: center;
            color: black;
            background-color:white;
            padding: 50px;
            margin: 20px;
            background-image: linear-gradient(rgb(209, 174, 179),rgb(129, 129, 181));
        }
        #About p{
            color: black;
            font-size: 25px;
        }
        #About h2{
            font-size: 50px;
        }
        #Home{
            background-image: url(https://cdn.mos.cms.futurecdn.net/whowhatwear/posts/257844/singapore-fashion-yoyo-cao-257844-1526447472036-image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-color: gray;
            background-blend-mode: multiply;
            padding:200px;
            margin: 20px;
        }
        #Service{
            margin: 20px;
            padding: 40px;
            background-image: radial-gradient(rgb(86, 57, 86),pink);
        }
        img{
            border-radius: 50%;
            border: 1px  solid black;
            height: 400px;
            width: 400px;
        }
        #Service h2{
            text-align: center;
            font-size: 50px;
        }
        #Service p{
            text-align: center;
            font-size: 23px;
        }
        #Contact{
            margin: 20px;
            padding: 30px;
            background-image:linear-gradient(rgb(141, 166, 118),rgb(207, 131, 184));
            
        }
        #Contact h2{
            font-size: 60px;
            text-align: center;
        }
        #Contact p{
            font-size: 25px;
            text-align: center;
        }
        #Contact h3{
            font-size: 35px;
            text-align: left;
            color: forestgreen;
        }
        #Form{
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            align-items: center;
            background-color: rgb(128, 153, 200);
        }
        input{
            border-radius: 5px;
            border: 1px solid black;
            size: 30px;
            height: 30px;
            width: 650px;
            box-sizing: border-box;
            padding: 20px;
        }
        #fm{
            box-sizing: border-box;
        }
        #Form h2{
            text-align: center;
            font-size: 50px;
            left: 20px;
            margin-bottom: 30px;
        }
        button{
            padding: 20px 15px;
            border-radius: 20px;
            border: 2px solid black;
            font-size: 16px;
            background-color: rgb(94, 119, 94);
            cursor: pointer;
            align-items: center;
            color: white;
            margin: 2px auto;
            display: block;
            width: 200px;
        }
    </style>
    <script>
        function myFile(){
            var phoneNumber =document.getElementById('no').value;
            var First=document.getElementById('First').value;
            var Last=document.getElementById('Last').value;
            if(phoneNumber===""){
                document.getElementById('s').innerHTML ="**Mobile number is required**";
                document.getElementById('s').style.color="red";
                return false
            }
            if(phoneNumber.length !==10){
                document.getElementById('s').innerHTML ="**Mobile number should be 10 digit long**";
                document.getElementById('s').style.color="red";
                return false
            }
            if(First !==First.toUpperCase()){
                document.getElementById('s').innerHTML ="**FIRST Name should be in uppercase.**";
                document.getElementById('s').style.color="red";
                return false
            }
             if(Last !==Last.toUpperCase()){
                document.getElementById('s').innerHTML ="**LAST Name should be in uppercase.**";
                document.getElementById('s').style.color="red";
                return false
            }
            
            document.getElementById('s').innerHTML = "Successfully";
            document.getElementById('s').style.color="green";
            return true
        };
    </script>
</head>
<body>
    <div class="Home" id="Home">
      <nav>
        <a href="#Home"><i class="fa-regular fa-house"></i>Home</a>
        <a href="#About"><i class="fa-duotone fa-solid fa-eject"></i>About</a>
        <a href="#Service"><i class="fa-regular fa-square-ring"></i>Service</a>
        <a href="#Contact"><i class="fa-solid fa-user-tie"></i>Contact</a>
        <a href="#Form"><i class="fa-solid fa-align-center"></i>Form</a>
      </nav>  
<br>
    <div class="header">
    <h1>FASHION GLORY</h1>
    <P>Money is important but,Fashion is a must.</P>
    </div>
    </div>
    <br>
    <div class="About" id="About">
        <h2>About</h2>
        <h2>Neha Fashion glory.</H2>
        <p>Neha here,This is online shopping Website. You can design your own fashion by choice our kurtas.Fashion is a dynamic cultural expression encompassing current styles in clothing, accessories, and lifestyle, and it serves as a powerful form of self-expression, allowing individuals to convey their personality, identity, and creativity to the world.A women's kurti is a versatile and traditional garment originating from the Indian subcontinent, celebrated for its comfort, elegance, and adaptability to diverse occasions and styles. </p>
    </div>
    <div class="Service" id="Service">
        <h2>Service</h2>
        <p>We sell top-quality kurtis for women, tailored to their preferences. Our collection features stylish designs and high-quality products.<br>We specialize in offering top-quality kurtis for women, designed to match their individual tastes and preferences. Our goal is to provide a wide variety of styles that cater to every woman—whether she’s looking for something elegant for a formal event, a casual piece for everyday wear, or a festive outfit for special occasions. Each kurti in our collection is crafted with attention to detail, using high-quality fabrics and modern tailoring techniques to ensure comfort, durability, and style. We believe that fashion is a reflection of personality, which is why our designs blend traditional elements with contemporary trends to suit the modern woman. From classic embroidered kurtas to trendy printed designs, we continuously update our collection to keep up with the latest fashion. Customer satisfaction and product quality are our top priorities, and we are committed to providing stylish and affordable kurtis that make every woman feel confident and beautiful.
        </p><br><br>
        <img src="https://www.ekisha.co.in/cdn/shop/files/Untitled_854x1000px_5_83851dae-108e-40c7-b3f4-690ccd48994e.jpg?v=1744567299" alt="Avator">
        <img src="https://www.wholesalecatalogz.com/image/catalog/0-Blogs/Blouse/Top-15-Blouse/wholesale-dress-surat-607f55c9675a67809ccdb3a520ed8d33.jpg" alt="Avator">
        <img src="https://m.media-amazon.com/images/I/81ZpP47VllL._UY1100_.jpg "alt="Avator">
    
    </div>
    <div class="Contact" id="Contact">
        <h2>Contact Us</h2>
        <p>"You can reach us via WhatsApp, Instagram, or by filling out the contact form."We’re always happy to hear from you! Whether you have a question, need help with your order, or simply want to explore more of our collection, getting in touch with us is easy and convenient. You can reach out to us directly through WhatsApp for quick responses and personalized assistance. You’re also welcome to connect with us on Instagram, where we regularly post updates, new arrivals, and styling ideas. Additionally, if you prefer, you can fill out the contact form on our website with your details and message, and we’ll get back to you as soon as possible. No matter which option you choose, we’re here to provide the support and service you deserve.
        </p>
        <h3>WhatsApp:-+910123456789</h3>
        <h3>Instagram:-#neha#</h3>
    </div>
    <div class="Form" id="Form" onsubmit="return myFile()">
        <h2>Contact Form</h2><br>
        <span id="s"></span>
        <form action="submit.php" method="post" id="fm">
        First Name:- <br>
        <input type="text" name="first_name" id="First" placeholder="your name" required><br><br>
        Last Name:- <br>
        <input type="text" name="last_name" id="Last" placeholder="your Last name" required><br><br>
        Email Id:- <br>
        <input type="email" name="email" id="email" placeholder="your Email" required><br><br>
        Phone Number:- <br>
        <input type="number" placeholder="Phone" name="no" id="no" required><br><br>
        Subject:- <br>
        <input type="text" name="Subject"  placeholder="Write something..." ><br><br>
        <br>
        <button type="submit">Submit</button><br>
        <span id="s"></span>

        </form>
    </div>
</body>
</html>