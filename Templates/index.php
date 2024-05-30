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


header {
    background-image: url('https://www.amnutrition.fr/cdn/shop/articles/debuter-musculation_1.jpg?v=1697119261&width=1100');
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    
}

header h2 {
    font-size: 3rem;
    margin-bottom: 1rem;
  animation: apparition 2s 0.5s ease-out forwards;
  opacity: 0;
}

header p {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    padding: 0 2rem;
  animation: apparition 2s 0.5s ease-out forwards;
  opacity: 0;
}

main {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 5rem;
    
}

.stats {
    background-image: linear-gradient(to top, rgba(255,0,0,0), rgba(255,0,0,0.3));
    font-size: 3rem;
    margin-bottom: 2rem;
    color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 3rem;
}

.card1 {
    max-height: 300px;
    max-width: 300px;
    margin: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    border-radius: 10px;
}

.card1 h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: red;
}

.card1 p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
    text-align: justify;

}

.card1 a {
    background-color: #be0000;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
}

.card1 a:hover {
    background-color: #ff0000;
}

.card2 {
    max-height: 300px;
    max-width: 300px;
    margin: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    border-radius: 10px;
}

.card2 h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: red;
}

.card2 p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
    text-align: justify;

}

.card2 a {
    background-color: #be0000;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
}

.card2 a:hover {
    background-color: #ff0000;
}

.card3 {
    max-height: 300px;
    max-width: 300px;
    margin: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    border-radius: 10px;
}


.card3 h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: red;
}

.card3 p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
    text-align: justify;

}

.card3 a {
    background-color: #be0000;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
}

.card3 a:hover {
    background-color: #ff0000;
}

.card4 {
    max-height: 300px;
    max-width: 300px;
    margin: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    border-radius: 10px;
}

.card4 h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: red;
}

.card4 p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
    text-align: justify;

}

.card4 a {
    background-color: #be0000;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
}

.card4 a:hover {
    background-color: #ff0000;
}

.YourSucces {
    padding: 8rem;
    margin: 1rem;
    display: flex;
    /* flex-direction: column; */
    text-align: center;
    justify-content: space-between;
    align-items: center;
    color: white;
    border-radius: 10px;
}

.divsc h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: red;
}

.divsc p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
    text-align: justify;
    
}

.divsc a {
    background-color: #be0000;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
}

.divsc a:hover {
    background-color: #ff0000;
}

.divsc {
    padding: 1rem;
    margin-left: 1rem;
}

.YourSucces img {
    border-radius: 10px;
}

footer {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    background-color: #000000;
    color: white;
    top: 165rem;
}

@keyframes apparition {
  from {
    opacity: 0;
  }

  35% {
    opacity: 0.5;
  }

  60% {
    opacity: 0.8;
  }

  100% {
    opacity: 1;
    transform: none;
  }
}


.card1,
.card2,
.card3,
.card4,
.YourSucces {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

.card1.visible,
.card2.visible,
.card3.visible,
.card4.visible,
.YourSucces.visible{
    opacity: 1;
    transform: translateY(0);
}



</style>


<body>
    <?php include 'nav.php'; ?>
     <header>
        <h2>Welcome to My Fitness</h2>
        <p>My Fitness is a website that provides you with the tools to help you reach your fitness goals. Whether you
            are looking to lose weight, gain muscle, or just improve your overall health, My Fitness has the resources
            you need to succeed. From workout plans and nutrition guides to expert advice and support, we are here to
            help you every step of the way. So what are you waiting for? Let's get started!</p>
    </header>
    <h1 class="stats">Stats</h1>
    <main>
        
        <div class="card1">
            <h3>Workouts</h3>
            <p>Looking to get in shape? My Fitness offers a variety of workout plans to help you reach your fitness
                goals. Whether you are a beginner or an experienced athlete, we have a plan that is right for you. From
                strength training and cardio to yoga and pilates, we have something for everyone. So what are you
                waiting for? Let's get moving!</p>
            <a href="workout.php">Learn More</a>
        </div>
        <div class="card2">
            <h3>Nutrition</h3>
            <p>They say abs are made in the kitchen, and we couldn't agree more. That's why My Fitness offers a variety
                of nutrition guides to help you eat right and fuel your body for success. Whether you are looking to
                lose weight, gain muscle, or just improve your overall health, we have a plan that is right for you.
                From meal plans and recipes to expert advice and support, we are here to help you every step of the way.
                So what are you waiting for? Let's get cooking!</p>
            <a href="nutrition.php">Learn More</a>
        </div>
        <div class="card3">
            <div class="Stats">
                <h3>Stats</h3>
                <p>My Fitness is a website that provides you with the tools to help you reach your fitness goals.
                    Whether you are looking to lose weight, gain muscle, or just improve your overall health, My Fitness
                    has the resources you need to succeed. From workout plans and nutrition guides to expert advice and
                    support, we are here to help you every step of the way. So what are you waiting for? Let's get
                    started!</p>
                <a href="stats.php">Learn More</a>
            </div>
        </div>
        <div class="card4">
            <div class="cardio">
                <h3>Cardio</h3>
                <p>Looking to get in shape? My Fitness offers a variety of workout plans to help you reach your fitness
                    goals. Whether you are a beginner or an experienced athlete, we have a plan that is right for you.
                    From strength training and cardio to yoga and pilates, we have something for everyone. So what are
                    you waiting for? Let's get moving!</p>
                <a href="404.php">Learn More</a>
            </div>
        </div>

        <div class="YourSucces">
            <img src="\ReactJS\stagnation-musculation.jpg" alt="Image Description">
            <div class="divsc">
            <h3>Your Success is Our Success</h3>
            <p>At My Fitness, we are committed to helping you reach your fitness goals. That's why we offer a variety of
                resources to help you succeed. From workout plans and nutrition guides to expert advice and support, we
                are here to help you every step of the way. So what are you waiting for? Let's get started on your
                fitness journey today!</p>
            </div>
            
        </div>

    <?php include 'contact.php'; ?>

        
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
  $(window).scroll(function() {
    var windowHeight = $(window).height();
    var windowTopPosition = $(window).scrollTop();
    var windowBottomPosition = (windowTopPosition + windowHeight);
    var delay = 250; 

    $(".card1, .card2, .card3, .card4, .YourSucces, .contact").each(function() {
      var cardPosition = $(this).offset().top;

      if (cardPosition < (windowBottomPosition - delay)) {
        $(this).addClass("visible");
      }
    });
  });
});

    </script>
        <footer>
            <copy class="copy">
                <p>&copy; 2021 My Fitness. All rights reserved.</p>
            </copy>    
        </footer> 
    </main>
    
</body>

</html>
