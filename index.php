<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    top: 20px;
    width: 100%;
    text-align: center;
    }
    .text2 {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 20px;
    left: 50px;
    }
    .text3 {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 20px;
    right: 50px;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
    }

    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }
    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    }

    @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
    }
</style>
</head>
<body>
    <div style="height: 120px;
    margin-top: 100px;">
        <div >
            <h2 id="pageTitle1" style="text-align:center">We have Created Pillsure Pocket<h2>
            <h2 id="pageTitle2" style="text-align:center"> <h2>
        </div>
    </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="Picture1.jpg" style="width:100%">
            <div class="text">NB-IoT communication technology</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="Picture2.jpg" style="width:100%">
            <div class="text">NB-IoT communication technology</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="Picture3.jpg" style="width:100%">
            <div class="text">NB-IoT Deep Indoor Penetration & Wide Coverage Signal</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="Picture4.jpg" style="width:100%">
            <div class="text">Equipped with NB-IoT module+GPS module+temperature sensor+narrow AI</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="Picture5.jpg" style="width:100%">
            <div class="text">Pillsure Limited</div>
            <div class="text2">Patent Pending GB 1718260.1</div>
            <div class="text3">100 X 75 X 18 mm</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
    </div>

<script>
    var slideIndex = 0;    
    
    var titleStrings1 = [" ", 
    "Pillsure Pocket Works", 
    " ",
    "We will be happy only that moment when Pillsure Pocket will help to",
    "   "    ];

    var titleStrings2 = ["We have created Pillsure Pocket", 
    "without subscription and service fee for 2 years", 
    "Pillsure Pocket works with eSIM, for global remote SIM provisioning",
    "save a human life",
    "   "    ];
    
    var slideIndex = 5;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}

        //
        document.getElementById("pageTitle1").innerHTML = titleStrings1[slideIndex-1];
        document.getElementById("pageTitle2").innerHTML = titleStrings2[slideIndex-1];

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
    autoShowSlides();

    function autoShowSlides() {
        slideIndex++;
        showSlides(slideIndex);
        setTimeout(autoShowSlides, 3000); // Change image every 2 seconds
    }
</script>

</body>
</html> 
