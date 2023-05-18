<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ms+Madi&family=Square+Peg&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    text-transform: capitalize;
    outline: 0; border: 0;
    font-family: 'Gabriola', cursive;
    font-family: 'Gabriola', cursive;
    transition: all 0.2s linear;
}

:root{
    --box-shodow: 0 0.5rem 0.5rem rgba(0,0,0,0.3);
    --mincolor: rgb(71,71,71);
    --sc-color: rgb(194,143,2)
}
html{
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 1rem;
}
html::-webkit-scrollbar{
    width: 0.8rem;
}
html::-webkit-scrollbar-track{
    background: #fff;
}
html::-webkit-scrollbar-thumb{
    background: #333;
    border-radius: 5rem;
}
.btn{
    display: inline-block;
    margin: 1rem 0;
    padding: 0.6rem 3rem;
    color: #fff;
    background: var(--sc-color);
    cursor: pointer;
    font-size: 1.7rem;
}
.btn:hover{
    letter-spacing: 0.2rem;

}
.heading{
    font-size: 6.2rem;
    color: var(--sc-color);
    padding: 1.5rem;
    text-align: center;
    margin-top: 12rem;
}
.heading:hover{
    letter-spacing: 0.3rem;
}
.heading span{
    color: var(--mincolor);
}
header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem 7%;
    overflow: hidden;
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;

}
header .logo{
    color: var(--mincolor);
    font-size: 2rem;
    background-color: white;
}
header .logo i{
    color: var(--sc-color);
    font-size: 1.3rem;
    background-color: white;
}
header .navbar a{
    margin: 0 0.7rem;
    font-size: 2rem;
    color: var(--mincolor);
    background-color: white;


}

/*header .navbar {
  background-color: #333;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}*/

header .navbar a:hover{
    color: var(--sc-color);
    border-bottom: 0.1rem solid var(--sc-color);
    padding-bottom: 0.5rem;
}
header .icons div{
    color: var(--mincolor);
    cursor: pointer;
    font-size: 1.5rem;
    margin: 0 0.3rem;
}
header .icons div:hover{
    color: var(--sc-color);
}
#bars-btn{
    display: none;
}

header .items{
    position: absolute;
    top: 110%;
    right: 1000rem;
/*    background: rgb(22, 22, 22);
*/    padding: 0 1.5rem;
    box-shadow: var(--box-shodow);
    width: 20rem;
}
header .items.active{
    right: 5%;
}
header .items .item{
    position: relative;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: .5rem;
}
header .items .item .fa-times{
    position: absolute;
    top: 1rem; right: 0.5rem;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--mincolor);
}
header .items .item .fa-times:hover{
    color: var(--sc-color);
    transform: rotate(90deg);
}
header .items .item img{
    height: 5rem;
}
header .items .item .content h3{
    font-size: 1rem;
    color: #eee;
    padding-bottom: 0.5rem;
}
header .items .item .content .price{
    font-size: 1rem;
    color: var(--sc-color);
}
header .items .btn{
    width: 100%;
    text-align: center;
}
.home .home-content{
    background-image: url(../image/home.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    width: 100%;
    top: 0; left: 0; right: 0;
    position: relative;


}
.home .home-content .home-i{
    display: flex;
    align-items: center;
    position: absolute;
    top: 15%; left: 31%;
    margin: 5rem;
    flex-wrap: wrap;
}

.home .home-content .home-i img{
    width: 15rem;
    animation: coffe 2.5s linear infinite;
}
@keyframes coffe{
    0%, 100%{
        transform: translateX(0);
    }
    50%{
        transform: translateX(3.2rem);
    }
}
.home .home-content .home-i h1{
    font-size: 3.3rem;
}
.home .home-content .home-i p{
    font-size: 1rem;
}
.about{

    min-height: 110vh;
}
.about .row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;
    width: 90%;
}
.about .row .image img{
    width: 30rem;
    height: 25rem;
    object-fit: cover;
}
.about .row .content{
    background: rgb(250, 240, 240);
    text-align: center;
    padding: 2rem;
}
.about .row .content h3{
    font-size: 2rem;
    margin: 2rem;
}
.about .row .content p{
    font-size: 1rem;
    margin: 1.1rem;
}
.products{
    background: #333;
    min-height: 140vh;
}
.products .row{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(25%,1fr));
    gap: 0.8rem;
    margin: 2.5rem auto;
    width: 90%;

}
.products .row .colm{
    padding: 1rem;
    text-align: center;


}
.products .row .colm:hover{
    box-shadow: var(--box-shodow);
    background: #eee;
    border-radius: 1rem;
    transform: translateY(-1rem);
}
.products .row .colm .image img{
    width: 12rem;
    height: 15rem;

}
.products .row .colm .content h3{
    font-size: 2rem;
    color: #000;
}
.products .row .colm .content .content-p{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 1rem;
}
.products .row .colm .content .content-p .price{
    border: 0.1rem solid var(--sc-color);
    background: var(--sc-color);
    border-radius: 0.5rem;
    padding: 0.3rem 0.8rem;
    font-size: 1rem;
    color: #fff;
}
.products .row .colm .content .content-p .btn-p{
    border: 0.1rem solid var(--sc-color);
    color: #000;
    font-size: 1rem;
    border-radius: 0.5rem;
    padding: 0.2rem 0.8rem;
}
.products .row .colm .content .content-p .btn-p:hover{
    background: var(--sc-color);
    color: #fff;
}
.gallery {
    background: #eee;
    min-height: 130vh;
}
.gallery .row{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(25%,1fr));
    gap: 1rem;
    margin: 2.5rem auto;
    width: 90%;

}
.gallery .row .box{
    position: relative;
    height: 20rem;
    overflow: hidden;

}
.gallery .row .box:hover{
    box-shadow: var(--box-shodow);
    border: 0.1rem solid var(--mincolor);
}
.gallery .row .box:hover img{
    transform: translateY(-100%);
}
.gallery .row .box img{
    height: 100%;
    width: 100%;
    object-fit: cover;

}

.gallery .row .box:hover .content{
    transform: translateY(0);
}
.gallery .row .box .content{
    position: absolute;
    top: 0; left: 0;
    background: rgb(245, 245, 245);
    text-align: center;
    padding: 3rem 2rem;
    height: 100%;
    width: 100%;
    transform: translateY(100%);
    padding-top: 2.5rem;
}
.gallery .row .box .content h3{
    font-size: 2rem;
    color: #000;
}
.gallery .row .box .content p{
    padding: 1rem 0;
    font-size: 1.8rem;
    line-height: 1;
    color: var(--mincolor);
    margin-bottom: 0;
    color: #000;

}
.review{
    background: #333;
}
.review .row{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(25%,1fr));
    gap: 1rem;
    margin: 2.5rem auto;
    width: 90%;

}
.review .row .box{
    text-align: center;
    padding: 3rem;
    border-radius: 1rem;
    margin: 4rem 0;
}
.review .row .box:hover{
    background: #eee;
    box-shadow: var(--box-shodow);
    transform: translateY(-1rem);
}
.review .row .box img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
}
.review .row .box h3{
    font-size: 1.8rem;
    color: #000;
}
.review .row .box p{
    font-size: 1.4rem;
    margin-bottom: 0;
    padding: 1rem 0;
}
.review .row .box .stars i{
    font-size: 1.5rem;
    color: var(--sc-color);
}
.contact{
    background: #eee;
}
.contact .row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 90%;
    margin: 0 auto;
    gap: 1.5rem;
}
.contact .row .form-c h3{
    font-size: 2.5rem;
    text-align: center;
}
.contact .row .form-c input{
    background: #fff;
    border-radius: 0.5rem;
    border: 0.1rem solid var(--sc-color);
    padding: 0.9rem 0.8rem;
    height: 2.3rem; width: 90%;
    margin: 0.5rem 0;
    color: #000;
    font-size: 1.5rem;
}
.contact .row .form-c input[type="submit"]{
    background: var(--sc-color);
    cursor: pointer;
    font-size: 1.6rem;
    height: 3rem; width: 90%;
    margin-bottom: 2rem;
    color: #fff;
}
.contact .row .form-c input[type="submit"]:hover{
    background: #fff;
    color: var(--sc-color);
}
.contact .row textarea{
    background: #fff;
    border: 0.1rem solid var(--sc-color);
    height: 12rem; width: 90%;
    padding: 0.5rem 0.8rem;
    font-size: 1.5rem;
}
.blogs{
    background: #333;
}
.blogs .row{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(25%,1fr));
    width: 90%;
    margin: 2.5rem auto;
    padding: 3.5rem 0;
    gap: 2rem;
}
.blogs .row .box img{
    width: 100%;
    border-radius: 0.5rem;
    object-fit: cover;
}
.blogs .row .box{
    background: #fff;
    border: 0.1rem solid #333;
    text-align: center;
    border-radius: 0.5rem;
}
.blogs .row .box:hover{
    transform: scale(1.1);
}
.blogs .row .box h3{
    color: #000;
    font-size: 2rem;
    margin: 0.8rem;
}
.blogs .row .box p{
    font-size: 1.7rem;
}
.blogs .row .box .stars i{
    font-size: 1.7rem;
    color: var(--sc-color);
    margin: 0.3rem;
}
.footer{
    background: #eee;
    text-align: center;
}
.footer .share{
    padding-top: 6rem;
    margin: 2rem 0;
}
.footer .share a{
    height: 5rem; width: 5rem;
    border-radius: 50%;
    line-height: 5rem;
    font-size: 2rem;
    color: #000;
    border: 0.1rem solid var(--sc-color);
    margin: 0.3rem;
}
.footer .links{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 2rem 0;
    gap: 1rem;
}
.footer .links a{
    padding: 0.7rem 2rem;
    color: #000;
    border: 0.1rem solid var(--sc-color);
    font-size: 1.5rem;
}
.footer .links a:hover,
.footer .share a:hover{
    background: var(--sc-color);
}




















/* media query */


@media (max-width:820px){
    html{
        font-size: 60%;
    }
    #bars-btn{
        display: inline-block;
    }
    header .navbar{
        position: fixed;
        /*   */ top: 1000rem;
        left:0;
        background: rgb(22, 22, 22);
        width: 100%;
        text-align: center;
        z-index: 1001;
    }
    header .navbar.active{
        top: 7rem;
    }
    header .navbar a{
        display: block;
        margin: 0.3rem 0;
        padding: 1rem 0;
        font-size: 2.3rem;
        color: #eee;
    }
    header .navbar a:hover{
        background: rgb(95, 95, 95);
    }

    .about .row{
        flex-flow: column;
    }
    .about .row .image img{
        width: 100%;
        object-fit: cover;
    }
    .products .row {
        display: flex;
        flex-flow: column;
        width: 90%;
    }
    .products .row .colm{
        width: 100%;
        margin: 0 auto;

    }
    .gallery .row{
        display: flex;
        flex-flow: column;
        width: 90%;
    }
    .gallery .row .box{
        width: 100%;
    }
    .review .row{
        display: flex;
        flex-flow: column;
        width: 90%
    }
    .review .row .box{
        width: 100%;
        margin: 0 auto;
    }
    .contact .row{
        flex-flow: column;
        width: 90%
    }
    .contact .row .ifarm iframe{
        width: 90%;
        margin: 0 auto;
    }
    .blogs .row{
        display: flex;
        flex-flow: column;
        width: 90%
    }
    .blogs .row .box{
        width: 90%;
        margin: 0 auto;
    }


}
    </style>
    <!-- cdn fontawesom  -->
    <script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="anonymous"></script>

    <title>coffe shop</title>
</head>
<body>

    <!-- headr  -->
    <header>
        <a href="#home" class="logo">
            <i class="fa-solid fa-mug-saucer"></i>Fresh Cafe
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">menu</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">Outlets</a>
            <a href="{{route('login')}}">Login</a>


        </nav>
    </header>
     <!-- /headr  -->
    <!-- home  -->

    <section class="home" id="home">
        <div class="home-content">
            <div class="home-i">
                <div class="content">
                    <h1>
                        hot coffee every morning
                    </h1>
                    <p>Welcome to Fresh Cafe  <br>
                    </p>
                    <a href="{{url('/home')}}" class="btn">order now</a>
                </div>
                <!-- <div class="home-image">
                    <img src="image/home2.png" alt="">
                </div> -->
            </div>
        </div>
    </section>
    <!-- home  -->
    <!-- about -->
    <section class="about" id="about">
        <h1 class="heading">our <span>about</span></h1>

        <div class="row">
            <div class="image">
                <img src="image/about.png" alt="">
            </div>
            <div class="content">
                <h3>why choes us</h3>
                <p>We Provide Fresh Food With Nice Ambience.</p>
                <a href="#" class="btn">read more...</a>
            </div>
        </div>
    </section>
    <!-- /about  -->
    <!-- products  -->
    <section class="products" id="products">
        <h1 class="heading">Our <span>Menu</span></h1>

        <div class="row">
            <div class="colm">
                <div class="image">
                    <img src="image/p1.png" alt="image">
                </div>
                <div class="content">
                    <h3>fresh tea</h3>
                    <div class="content-p">
                        <span class="price">$20.00</span>
                        <a href=""> <span class="btn-p order-button" data-coffee-id="1">order now</span></a>

                    </div>
                </div>
            </div>

            <div class="colm">
                <div class="image">
                    <img src="image/p2.png" alt="image">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="content-p">
                        <span class="price">$25.00</span>
                        <span class="btn-p order-button" data-coffee-id="2">order now</span>

                    </div>
                </div>
            </div>

            <div class="colm">
                <div class="image">
                    <img src="image/p3.png" alt="image">
                </div>
                <div class="content">
                    <h3>Cream coffee</h3>
                    <div class="content-p">
                        <span class="price">$35.00</span>
                        <span class="btn-p order-button" data-coffee-id="3">order now</span>

                    </div>
                </div>
            </div>

            <div class="colm">
                <div class="image">
                    <img src="image/p4.png" alt="image">
                </div>
                <div class="content">
                    <h3>fresh coffe</h3>
                    <div class="content-p">
                        <span class="price">$10.00</span>
                        <span class="btn-p order-button" data-coffee-id="4">order now</span>

                    </div>
                </div>
            </div>

            <div class="colm">
                <div class="image">
                    <img src="image/p5.png" alt="image">
                </div>
                <div class="content">
                    <h3>fresh coffe</h3>
                    <div class="content-p">
                        <span class="price">$25.00</span>
                        <span class="btn-p order-button" data-coffee-id="5">order now</span>

                    </div>
                </div>
            </div>

            <div class="colm">
                <div class="image">
                    <img src="image/p6.png" alt="image">
                </div>
                <div class="content">
                    <h3>fresh coffe</h3>
                    <div class="content-p">
                        <span class="price">$30.00</span>
                        <span class="btn-p order-button" data-coffee-id="6">order now</span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /products  -->
    <!-- .gallery  -->
    <section class="gallery" id="gallery">
        <h1 class="heading">our <span>gallery</span></h1>
        <div class="row">

            <div class="box">
                <img src="image/menu-1.jpg" alt="image">
                <div class="content">
                    <h3>
                        fresh coffee
                    </h3>
                    <p>Capitano</p>
                    <a href="#blogs" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/menu-2.jpg" alt="image">
                <div class="content">
                    <h3>
                        fresh coffee
                    </h3>
                    <p>Cold Coffee</p>
                    <a href="#blogs" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/menu-3.jpg" alt="image">
                <div class="content">
                    <h3>
                        fresh coffee
                    </h3>
                    <p>Late</p>
                    <a href="#blogs" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/menu-4.jpg" alt="image">
                <div class="content">
                    <h3>
                        fresh tea
                    </h3>
                    <p>Darjeeling Tea</p>
                    <a href="#blogs" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/menu-5.jpg" alt="image">
                <div class="content">
                    <h3>
                        fresh tea
                    </h3>
                    <p>Assam Tea</p>
                    <a href="#blogs" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/menu-6.jpg" alt="image">
                <div class="content">
                    <h3>
                        fresh tea
                    </h3>
                    <p>Ginger Tea</p>
                    <a href="#blogs" class="btn">order now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /gallery  -->
    <!-- review  -->
    <section class="review" id="review">
        <h1 class="heading">our <span>review</span></h1>
        <div class="row">

            <div class="box">
                <img src="image/rev1.jpg" alt="image">
                <h3>john deo</h3>
                <p>Ambience is good</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="image/rev2.jpg" alt="image">
                <h3>john deo</h3>
                <p>Foods are fresh</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="image/rev3.jpg" alt="image">
                <h3>sara deo</h3>
                <p>Staffs are well trained</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>


        </div>
    </section>
    <!-- /review -->
   <!-- contact -->
<section class="contact" id="contact">
    <h1 class="heading">contact</h1>

    <div class="row">
        <div class="ifarm">
            <div id="map" style="width: 550px; height: 430px;"></div>
        </div>
        <div class="form-c">
            <form action="{{route('store-data')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h3>contact us</h3>
                <input type="text" name="name" placeholder="enter your name .....">
                <input type="email" name="email" placeholder="enter your email .....">
                <input type="number" name="number" placeholder="enter your phone .....">
                <textarea name="review" cols="30" rows="10"></textarea>
                <input type="submit" value="send message">
            </form>
        </div>
    </div>
</section>

<script>
    function loadMap() {
        var mapContainer = document.getElementById('map');
        var mapOptions = {
            center: { lat: 22.5726, lng: 88.3639 }, // Kolkata coordinates
            zoom: 12, // Normal zoom level for Kolkata
            language: 'en'
        };
        var map = new google.maps.Map(mapContainer, mapOptions);
    }
    loadMap(); // Call the function to load the map
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=loadMap" async defer></script>

    <!-- outlet  -->
    <section class="blogs" id="blogs">
        <h1 class="heading">Outlets</h1>
        <div class="row">
            <div class="box">
                <img src="image/o1.jpg" alt="image">
                <h3>Salt Lake Sector 5</h3>
                <p> </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/seatbook" class="btn"> book seat</a>
            </div>

            <div class="box">
                <img src="image/o2.jpg" alt="image">
                <h3>College Street</h3>
                <p> </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/seatbook" class="btn">book seat</a>
            </div>

            <div class="box">
                <img src="image/o3.jpg" alt="image">
                <h3>Shyam Bazar 5 </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/seatbook" class="btn">book seat</a>
            </div>
            <div class="box">
                <img src="image/o4.jpg" alt="image">
                <h3>Chinar Park </h3>
                <p></p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/seatbook" class="btn">book seat</a>
            </div>
            <div class="box">
                <img src="image/o5.jpg" alt="image">
                <h3>Dumdum</h3>
                <p> </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/seatbook" class="btn">book seat</a>
            </div>
            <div class="box">
                <img src="image/o6.jpg" alt="image">
                <h3>kalighat</h3>
                <p> </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/seatbook" class="btn"> book seat</a>
            </div>
        </div>
    </section>
    <!-- /outlets  -->
    <!-- footer  -->
    <footer class="footer">

        <div class="share">
            <a href="#" class="fa-brands fa-facebook"></a>
            <a href="#" class="fa-brands fa-twitter"></a>
            <a href="#" class="fa-brands fa-instagram"></a>
            <a href="#" class="fa-brands fa-linkedin"></a>
            <a href="#" class="fa-brands fa-pinterest"></a>
        </div>

        <div class="links">

            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">menu</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>


        </div>
    </footer>
    <!-- footer -->

<script>
  let Navbar = document.querySelector('.navbar');

  document.querySelector('#bars-btn').onclick = () =>{
    Navbar.classList.toggle('active');
    SearchForm.classList.remove('active');
    CartItem.classList.remove('active');
  }

  let SearchForm = document.querySelector('.search-form');

  document.querySelector('#search-btn').onclick = () =>{
    SearchForm.classList.toggle('active');
    Navbar.classList.remove('active');
    CartItem.classList.remove('active');
  }

  let CartItem = document.querySelector('.items');

  document.querySelector('#cart-btn').onclick = () =>{
    CartItem.classList.toggle('active');
    Navbar.classList.remove('active');
    SearchForm.classList.remove('active');
  }
</script>

<!-- Add this HTML element for displaying the success message -->
<div id="order-success-message" style="display: none;">Order placed successfully!</div>

<script>
  const orderButtons = document.querySelectorAll('.order-button');
  orderButtons.forEach(button => {
    button.addEventListener('click', () => {
      const coffeeId = button.getAttribute('data-coffee-id');
      // Handle the order button click event here
      // You can use the `coffeeId` to identify the selected coffee and perform further actions
      console.log('Order button clicked for coffee with ID:', coffeeId);

      // Show the success message
      const successMessage = document.getElementById('order-success-message');
      successMessage.style.display = 'block';
    });
  });
</script>


</body>
</html>
