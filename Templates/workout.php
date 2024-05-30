<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fitness | Workout</title>
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

main {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(20rem, 1fr));
    gap: 1rem;
    padding: 1rem;
}

.card1 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;
}

.card1 h1 {
    font-size: 2rem;
    text-align: center;
}

.card1 img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 1rem;
}

.card1 button {
    display: block;
    width: 100%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}

.card1 button:hover {
    background-color: darkred;
}

.card2 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;

}

.card1 h2 {
    font-size: 2rem;
    text-align: center;
}

.card2 img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 1rem;
}

.card2 button {
    display: block;
    width: 100%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}

.card3 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;
}

.card3 h3 {
    font-size: 2rem;
    text-align: center;
}

.card3 img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 1rem;
}

.card3 button {
    display: block;
    width: 100%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}

.card4 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;
}

.card4 h4 {
    font-size: 2rem;
    text-align: center;
}

.card4 img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 1rem;
}

.card4 button {
    display: block;
    width: 100%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}

.card5 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;

}

.card5 h5 {
    font-size: 2rem;
    text-align: center;
}

.card5 img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 1rem;
}

.card5 button {
    display: block;
    width: 100%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}

.card6 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;
}

.card6 h6 {
    font-size: 2rem;
    text-align: center;
}

.card6 img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 1rem;
}

.card6 button {
    display: block;
    width: 100%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}

.card7 {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    max-width: 20rem;
    min-height: 30rem;
    border-radius: 1rem;
    display: flex;
        justify-content: center;
        align-items: center;
}

.card7 button {
    position: relative;
    width: 50%;
    padding: 1rem;
    margin-top: 1rem;
    background-color: red;
    color: white;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
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
<main>
    <div class="card1">
        <h1>
            ARMS
        </h1>
        <img src="\ReactJS\stagnation-musculation.jpg" alt="arms">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error.
        </p>
        <button>
            
                Click me
            
        </button>
    </div>
    <div class="card2">
    <h1>
            LEGS
        </h1>
        <img src="\ReactJS\stagnation-musculation.jpg" alt="arms">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error.
        </p>
        <button>
            
                Click me
            
        </button>
    </div>
    <div class="card3">
    <h1>
            SHOULDERS
        </h1>
        <img src="\ReactJS\stagnation-musculation.jpg" alt="arms">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error.
        </p>
        <button>
            
                Click me
            
        </button>
    </div>
    <div class="card4">
    <h1>
            ABS
        </h1>
        <img src="\ReactJS\stagnation-musculation.jpg" alt="arms">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error.
        </p>
        <button>
            
                Click me
            
        </button>
    </div>
    <div class="card5">
    <h1>
            CHEST
        </h1>
        <img src="\ReactJS\stagnation-musculation.jpg" alt="arms">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error.
        </p>
        <button>
            
                Click me
            
        </button>
    </div>
    <div class="card6">
    <h1>
            BACK
        </h1>
        <img src="\ReactJS\stagnation-musculation.jpg" alt="arms">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error.
        </p>
        <button>
            
                Click me
            
        </button>
    </div>    
    <div class="card7">
        <button>
            Load More
        </button>
    </div>
    

</main>

<div class="contact2">
<?php include 'contact.php';?>
</div>

    
</body>
</html>