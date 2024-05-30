<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fitness</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body,
html {
    font-family: 'Roboto', sans-serif;
    background-color: #000000;
    color: white;
}

.card {
  position: relative;
  background: #fff;
  width: 190px;
  height: 265px;
  border-radius: 8px;
  cursor: pointer;
  transition: all 120ms;
  overflow: hidden;
  box-shadow: 0px 1px 13px rgba(0,0,0,0.1);
}

.card:active {
  transform: scale(.95);
}

.card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: inset 0px 0px 25px 5px rgba(255, 255, 255, .5);
  z-index: 1;
}

.card::after {
  content: "Add to Cart";
  position: absolute;
  bottom: -50%;
  left: 0;
  padding-left: 15px;
  background: #181818;
  width: 100%;
  height: 60px;
  color: #fff;
  line-height: 50px;
  text-transform: uppercase;
  z-index: 2;
  transition: all .2s ease-in;
}

.card:hover::after {
  bottom: 0;
}

.card:active::after {
  content: "Adding !";
  height: 65px;
}

.image {
  position: absolute;
  top: 50%;
  left: 50%;
  /* width: 50px; */
  height: auto;
  filter: drop-shadow(3px 3px 5px #18181815);
  transform: translate(-50%, -50%);
  animation: shoes 1s ease infinite alternate;
  transition: all .5s ease-in;
}

@keyframes shoes {
  from {
    top: 48%;
  }

  to {
    top: 52%;
  }
}

.card:hover .image {
  /* top: 20%;
  left: 30%; */
  width: 220px;
  height: auto;
  animation: none;
  transform: rotate(15deg) translate(-35%, -25%);
}

img {
    width: 250px;
    margin-left: -15px;
}

.text {
  position: absolute;
  top: 15%;
  left: -80%;
  color: #181818;
  transition: all .3s ease-in;
}

.text span {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 5px;
}

.text p {
  font-size: 18px;
  font-weight: bold;
}

.card:hover .text {
  top: 15%;
  left: 5%;
}

.fil-shoes2 {
  fill: #a59573
}

main {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(20rem, 1fr));
    gap: 2rem;
    padding: 6rem;
    justify-items: center;
}

header {
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    padding: 1rem;
    background-color: #000000;
    color: white;
    position: relative;
    top: 1.5rem;
    z-index: 1;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.group {
  display: flex;
  line-height: 28px;
  align-items: center;
  position: relative;
  max-width: 190px;
}

.input {
  width: 100%;
  height: 40px;
  line-height: 28px;
  padding: 0 1rem;
  padding-left: 2.5rem;
  border: 2px solid transparent;
  border-radius: 8px;
  outline: none;
  background-color: #f3f3f4;
  color: #0d0c22;
  transition: 0.3s ease;
}

.input::placeholder {
  color: #9e9ea7;
}

.input:focus,
input:hover {
  outline: none;
  border-color: rgba(234, 226, 183, 0.4);
  background-color: #fff;
  box-shadow: 0 0 0 4px rgb(234 226 183 / 10%);
}

.icon {
  position: absolute;
  left: 1rem;
  fill: #9e9ea7;
  width: 1rem;
  height: 1rem;
}

.contact2 {
  display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    margin-bottom: 6rem;
    position: relative;
    z-index: 1;
}


</style>
<body>
<?php include 'nav.php'; ?>
<header>
  
<h2>
  <strong>My Fitness - Nutrition</strong> 
</h2>
<div class="group">
  <svg viewBox="0 0 24 24" aria-hidden="true" class="icon">
    <g>
      <path
        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
      ></path>
    </g>
  </svg>
  <input class="input" type="search" placeholder="Search" />
</div>


</header>


<main>


    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/06/DAYLI.jpg" alt="1">
    </div>
    <div class="text">
        <span>Multi vitamines</span>
        <p>18.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/07/PURE_GLUTAMINE_500g-removebg-preview.png" alt="2">    
    </div>
    <div class="text">
        <span>Glutamine</span>
        <p>26.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/07/photo-pour-new-site-3.png" alt="2">
    </div>
    <div class="text">
        <span>Omega 3</span>
        <p>19.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/06/324935071_1297307204162834_8877538477089727328_n.jpg" alt="3">
    </div>
    <div class="text">
        <span>Whey fraise</span>
        <p>54.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/05/MASS_GAIN_4000G_CHOCOLATE_3D.png" alt="4">
    </div>
    <div class="text">
        <span>Mass gain</span>
        <p>54.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/09/delicatesse-zero-professional.png" alt="5">
    </div>
    <div class="text">
        <span>Hydrolyzed zero</span>
        <p>34.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2023/06/citrulline-malate-200g.jpg" alt="6">
    </div>
    <div class="text">
        <span>Citrulline</span>
        <p>21.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/06/WORKOUT_NUTRITION_ZMA_PRO_120CAPS_3D-2048x2048.png" alt="7">
    </div>
    <div class="text">
        <span>ZMA+ Pro</span>
        <p>18.90€</p>
    </div>
    </div>
    <div class="card">
    
    <div class="image">
        <img src="https://nutripeps.fr/wp-content/uploads/2022/08/carbonizerxr_zip_1000g_0010_druk_0001-5dc14c310668d.png" alt="8">
    </div>
    <div class="text">
        <span>Carbonizer</span>
        <p>13.90€</p>
    </div>
    </div>
</main>
<div class="contact2">
<?php include 'contact.php';?>

</div>

</body>

</html>
