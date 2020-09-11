<?php 
header("Content-Type: text/css; charset: UTF-8"); 
 ?>
* {
    padding: 0;
    margin: 0;
}

html{
    overflow-y: scroll;
    scroll-behavior: smooth;
}

h3 {
    font-weight: bold;
    text-transform: uppercase;
}

h2 {
    font-size: 12px;
}

header {
    text-align: center;
    background-image: url('./img/wallpaper-header.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
}

.header-container{
    display: flex;
    background-color: rgba(0, 0, 0, 0.5);
    height: 100vh;
}

.title-welcome {
    text-transform: uppercase;
    text-align: start;
    margin: auto;
    color: #ffffff;
    opacity: 0;
    transition: all ease-in-out 1s;
}

.title-welcome span{
    color: rgb(2, 130, 190);
}

.image-profile {
    margin: auto;
    position: relative;
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 50%;
}
  
.image-profile img {
    width: 100%;
    height: auto;
}

.title-welcome button{
    background-color: transparent;
    color: #fff;
    border: 2px solid #C2C2C2;
    border-radius: 3px;
    padding: 1em;
    font-weight: bold;
    transition: background-color 1s;
}

.title-welcome button:hover {
    background-color: #fff;
    color: #000;
}

.navbar-container {
    display: block;
    position: sticky;
    background: #252525;
    border-bottom: 5px solid rgb(116, 0, 0);
    padding: 5px;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    transition: all ease-in-out 1s;
}

.nav-a{
    display: flex;
    flex-flow: row wrap;
    justify-content: flex-start;
    font-size: 18px;
    font-weight: bold;
}

.nav-a a{
    color: #e9e9e9;
    transition: all ease-in .1s;
}

.nav-a a:hover{
    text-decoration: none;
    color: #e9e9e9;
}

li {
    list-style-type: none;
    margin: 0 10px 0;
}

/*ABOUT*/
.about-container{
    background-color: #bae9e9;
    padding: 3rem;
}

.about-title{
    text-align: center;
    padding: 2rem;
    font-weight: bold;
}

.line-canvas{
    opacity: 0;
    transform: translateX(70px);    
    transition: all ease-in-out 1s;
}

.line-canvas-two{
    opacity: 0;
    transform: translateX(-90px);
    transition: all ease-in-out 1s;
}

.about-flex{
    display: flex;
    flex-wrap: nowrap;
    padding: 3rem;
}

.about-flex h2{
    opacity: 0;
    transition: all ease-in-out 1s;
    transform: translateX(-300px);
}

.about-flex span{
    opacity: 0;
    transition: all ease-in-out 1s;
    transform: translateX(50px);    
}

.about-flex span,
.icons-grid{
    width: 75%;
}

.icons-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding-top: 3rem;
    text-align: center;
}

/* SKILLS */
.skills-container{
    display: flex;
    background-image: url('./img/software-engineering-skills.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: center;
}

.skills{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    background-color: rgba(211, 211, 211, 0.8);
    padding: 3rem;
    align-items: center;
    text-align: center;
}

.skills-description p{
    padding: 2rem;
    text-align: justify;
    opacity: 0;
    transform: translateY(100px);
    transition: all ease-in-out 1s;
}

.graphic-chart{
    display: block;
    max-width: 100%;
    max-height: 100%;
    opacity: 0;
    transform: translateY(-50px);
    transition: all ease-in-out 1s;
}

.bar-title{
    border-top: 5px solid #000;
    border-bottom: 5px solid #000;
    text-align: center;
    background: #ececec;
    padding: 1em;
    text-transform: uppercase;
}

.bar-container{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    margin: auto;
    overflow: hidden;
    background-color: #fff;
}

.bar-about{
    padding: 3em;
    background: #ffffff;
}

.bar-flex{
    display: flex;
    border: 1px solid #000;
    border-radius: 10px;
    height: 40px;
    padding-right: 10px;
    margin: 1rem;
    overflow: hidden;
    justify-content: space-between;
}

.bar-flex:last-child{
    margin-bottom: 5rem;
}

.bar-fill {
    width: 20%;
    transition: all linear 1s;
}

.tag-bold-flex{
    font-weight: bold;
    background: linear-gradient(0.25turn,#000,#2c2f31);
    color: #fff;
    width: 90px;
    height: 40px;
    padding: 5px;
    text-align: center;
}

.project-container{
    background: #2f2f2f;
    color: #ffffff;
}


.project-title{
    padding: 2rem;
    text-align: center;
}

.examples{
    margin: auto;
    padding: 2rem;
    overflow: hidden;
}

.examples img{
    width: 40%;
    display: block;
    border: 3px solid #000;
    margin: auto;
    transition: all ease-in-out .2s;
    border-radius: 5px;
}

.examples img:hover{
    filter: blur(3px);
}

.contact-container{
    text-align: center;
    margin: auto;
    background-image: url('./img/contact.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

.contact-background{
    background: rgba(0, 0, 0, 0.603);
    padding: 3rem;
}

.contact-border{
    width: 40%;
    border: 3px solid #000;
    margin: auto;
    background: #9f9f99ea;
}

.contact-title{
    margin: auto;
    padding: 1rem;
}


.form-container{
    display: flex;
    flex-flow: column wrap;
    margin: auto;
}

.form-container label{
    width: 60%;
    text-align: left;
    align-self: center;
    padding-top: 5px;
}

.form-container input,
.form-container textarea{
    width: 60%;
    padding: 5px;
    align-self: center;
    border-radius: 5px;
    background: none;
    border: 2px solid #000;
    overflow: hidden;
}

.form-container input:focus,
.form-container textarea:focus{
    background: #9f9f99ea;
}

.form-container input::placeholder,
.form-container textarea::placeholder{
    color: #000;
}

.form-container textarea{
    min-height: 100px;
    max-height: 120px;
}

.form-container input[type="submit"]{
    background: rgb(255, 255, 255);
    width: 35%;
    font-weight: bold;
    margin: 25px 0px 25px;
}

.footer-container{
    display: flex;
    flex-flow: column wrap;
    margin: auto;
    justify-content: center;
    background-color: #272727;
    padding: 2rem;
}

.icon-media{
    text-align: center;
    color: #ffffff;
    align-self: center;
}

.icon-media i {
    color: #ffffff;
    margin: 15px;
    transition: all ease-in-out .4s;
}

.icon-media i:hover{
    color: #ebebeb;
    transform: translateY(-5px);
}

.home-arrow {
    display: block;
    margin: auto;
    padding-top: 5px;
    width: 50px;
    height: 50px;
    text-align: center;
    background: #f28e05;
}

.fa-arrow-up{
    color: #ffffff;
    transform: translateY(5px);
    transition: all ease-in-out .5s;
}

.fa-arrow-up:hover{
    transform: translateY(0px);
}

@media (max-width: 800px){

    .title-welcome h1{
        font-size: 24px;
    }

    .title-welcome button{
        padding: 1rem;
    }

    .about-flex{
        flex-flow: row wrap;
        text-align: justify;
        width: 100%;
        height: 100%;
    }

    .about-container{
        padding: 5px;
        text-align: center;
    }

    .about-flex span{
        width: 100%;
    }

    .icons-grid{
        width: 100%;
    }
    
    .skills{
        display: flex;
        flex-flow: column wrap;
        justify-content: center;
        height: 100%;
        padding: 2rem;
    }

    .skills-container{
        margin: auto;
    }

    .graphic-chart{
        max-width: 70%;
        max-height: 70%;
    }

    .bar-flex{
        height: 30px;
    }
    
    .tag-bold-flex{
        font-size: 8px;
        width: 40px;
        height: 30px;
        padding: 5px;
    }

    .contact-border{
        width: 80%;
    }

    .contact-background{
        padding: 1rem;
    }
}

@media (max-width: 550px){

    .header-container{
        display: flex;
        height: 100vh;
    }
    
    .title-welcome {
        text-align: center;
        margin: auto;
        color: #ffffff;
        padding: 10px;
    }

    .title-welcome h1{
        font-size: 24px;
    }
    
    .title-welcome button{
        background-color: transparent;
        color: #fff;
        border: 2px solid #C2C2C2;
        border-radius: 3px;
        padding: 1em;
        font-weight: bold;
        transition: background-color 1s;
    }
    
    .title-welcome button:hover {
        background-color: #fff;
        color: #000;
    }

    .nav-a{
        font-size: 16px;
    }

    .about-container{
        padding: 0;
        text-align: center;
    }

    .about-title h2{
        transform: translateX(-50px);
    }

    .skills-container{
        margin: auto;
    }

    .skills{
        display: flex;
        flex-flow: column wrap;
        justify-content: center;
    }

    .bar-container{
        display: flex;
        flex-flow: column wrap;
    }

    .examples img{
        width: 100%;
    }

    .contact-border{
        width: 100%;
    }

    .contact-background{
        padding: 0;
    }

    .footer-container{
        height: 100%;
    }

    .about-flex span,
    .icons-grid{
        width: 100%;
    }

    .icons-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding-top: 1rem;
        text-align: center;
    }

    .skills-description h3{
        padding-top: 2rem;
    }

    .skills-description p{
        font-size: 15px;
    }

    .graphic-chart{
        max-width: 100%;
    }

    .bar-flex{
        height: 30px;
    }
    
    .tag-bold-flex{
        font-size: 7.5px;
        width: 40px;
        height: 30px;
        padding: 0px;
    }

    .project-container{
        height: 100%;
    }

    @media (max-width: 320px){
        .navbar-container{
            display: flex;
            justify-content: center;
        }

        .about-flex h2{
            font-size: 24px;
        }

        .about-flex span{
            font-size: 14px;
        }

        .nav-a{
            font-size: 12px;
        }

        .skills-container{
            background-image: none;
        }

        .graphic-chart{
            display: none;
        }
    }
}