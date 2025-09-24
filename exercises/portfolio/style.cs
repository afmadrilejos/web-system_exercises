@import url('https://fonts.googleapis.com/css2?family=Poppins.wght@100;200;300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
}

html{
    font-size:62.5%;
}

body{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 100vh;
    overflow-x: hidden;
    background-color:bisque;
    color: black;
}

.img-container img{
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

header{
    margin-top: 20px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 1frem 9%;
    background-color: transparent;
    filter: drop-shadow(10px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.logo{
    font-size: 3rem;
    color:brown;
    font-weight: 800;
    cursor: pointer;
    transition: 0.5s ease;
}

.logo:hover{
    transform: scale(1.1);
}

nav.a{
    font-size:1.8rem;
    color: black;
    margin-left: 4rem;
    font-weight: 500;
    transition: 3.0s ease;
}

nav a:hover,
nav a.active{
    color: brown;
    border-bottom: 3px solid brown;
}

@media(max-width:9955px){
    nav{
        position: absolute;
        top: 100%;
        right: 0;
        width: 40%;
        border-left: 3px solid brown;
        border-bottom: 3px solid brown;
        border-bottom-left-radius: 2rem;
        padding: 1rem;
        background-color: bisque;
        border-top: 0.1rem solid  rgba(0, 0, 0, 0.1);
    }

    nav.active{
        display: block;
    }

    nav.a{
        display: bloc;
        font-size: 2rem;
        margin: 3rem 0;
    }

    nav a:hover,
    nav a.actiive{
        padding: 1rem;
        border-radius: 0.5rem;
        border-bottom: 0.5rem;
    }
}

home{
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background: brown;
}

.home-content{
    max-width: 70%;
    height: auto;
    display: block;
    margin: 0 auto;
}

  This repository is created to store all my activities and exercises for the Web System and Technology course. Files such as:
- HTML Exercise
- CSS Exercise
- DFD Activity
- GANTT CHART Activity (draft)
  are previously uploaded elsewhere due to an error, and this repository serves as their correct and final location.