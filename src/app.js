let scroll = new SmoothScroll('a[href*="#"]', {
    speed: 300,
    speedAsDuration: true
});

//Creating Canvas
const lineStroke = document.querySelector('.line-canvas').getContext('2d');
const lineStrokeTwo = document.querySelector('.line-canvas-two').getContext('2d');
const lineCanvas = document.querySelector('.line-canvas');
const lineCanvasTwo = document.querySelector('.line-canvas-two');
const graphicChart = document.querySelector('.graphic-chart');
const circleStroke = document.getElementById('circle-canvas').getContext('2d');

//canvasLine
lineStroke.lineWidth = 8;
lineStroke.moveTo(0, 0);
lineStroke.lineTo(120, 0);
lineStroke.stroke();

lineStrokeTwo.lineWidth = 8;
lineStrokeTwo.moveTo(0, 0);
lineStrokeTwo.lineTo(120, 0);
lineStrokeTwo.stroke();

//querySelectorAll
const barFill = document.querySelectorAll('.bar-fill');

//querySelector
const navBarContainer = document.querySelector('.navbar-container');
const aboutTitle = document.querySelector('.about-title');
const iconGrid = document.querySelector(".icons-grid");
const aboutFlexTitle = document.querySelector('.about-flex h2');
const aboutFlexSpan = document.querySelector('.about-flex span');
const skillsEffect = document.querySelector('.skills-description p');
const projectContainer = document.querySelector('.project-container');
const contactContainer = document.querySelector('.contact-container');
const titleWelcome = document.querySelector('.title-welcome');
const input = document.querySelector('.form-control');

//NavbarTextColor
const aboutNav = document.querySelector('#aboutNav');
const skillsNav = document.querySelector('#skillsNav');
const projectNav = document.querySelector('#projectNav');
const contactNav = document.querySelector('#contactNav');

//LoadWindow
window.addEventListener('load', () => {
    barFill.forEach(i => i.after(i.title));
    //HOME
    if(window.scrollY < 5){
        titleWelcome.style.opacity = 1;
    }else{
        titleWelcome.style.opacity = 0;
    }
})


//ScrollListener
window.addEventListener('scroll', scroll = () => {

    //positionBounding
    const barFlexPosition = document.querySelector('.bar-flex').getBoundingClientRect().top;
    const titleGridPosition = aboutTitle.getBoundingClientRect().top
    const skillsEffectPosition = skillsEffect.getBoundingClientRect().top;
    const projectContainerPosition = projectContainer.getBoundingClientRect().top;
    const contactContainerPosition = contactContainer.getBoundingClientRect().top;
    const screenPosition = window.innerHeight;

    if(window.scrollY < 5){
        titleWelcome.style.opacity = 1;
    }else{
        titleWelcome.style.opacity = 0;
    }
    
    //ABOUT
    if (titleGridPosition < 570) {
        aboutFlexTitle.style.opacity = 1;
        aboutFlexTitle.style.transform = "translateX(0px)";
        aboutFlexSpan.style.opacity = 1;
        aboutFlexSpan.style.transform = "translateX(0px)";
        lineCanvas.style.opacity = 1;
        lineCanvas.style.transform = "translateX(0px)";
        aboutNav.style.color = '#A5A7A7'
    } else {
        aboutFlexTitle.style.opacity = 0;
        aboutFlexTitle.style.transform = "translateX(-80px)";
        aboutFlexSpan.style.opacity = 1;
        aboutFlexSpan.style.transform = "translateX(50px)";
        lineCanvas.style.opacity = 0;
        lineCanvas.style.transform = "translateX(70px)";
        aboutNav.style.color = '#fff'
    }

    //SKILLS
    if (skillsEffectPosition < 480) {
        aboutNav.style.color = '#fff'
        graphicChart.style.opacity = 1;
        graphicChart.style.transform = "translateX(0px)";
        skillsEffect.style.opacity = 1;
        skillsEffect.style.transform = "translateY(0px)";
        lineCanvasTwo.style.opacity = 1;
        lineCanvasTwo.style.transform = "translateX(0px)";
        skillsNav.style.color = '#A5A7A7'
    } else {
        graphicChart.style.opacity = 0;
        graphicChart.style.transform = "translateY(-50px)";
        skillsEffect.style.opacity = 0;
        skillsEffect.style.transform = "translateY(100px)";
        lineCanvasTwo.style.opacity = 0;
        lineCanvasTwo.style.transform = "translateX(-70px)";
        skillsNav.style.color = '#fff'
        let chart = new Chart(circleStroke, {
            type: "doughnut",
            data: {
                labels: ['Front-end', 'Back-end', 'Others'],
                datasets: [{
                    label: 'Data',
                    data: [60, 30, 10],
                    backgroundColor: ['#00DEDB', '#19c435', '#c41919'],
                    options: {
                        responsive: false,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Skills',
                        },
                        animation: {
                            animateScale: false,
                            animateRotate: false
                        }
                    },
                }],
            }
        })
    }

    if (barFlexPosition < screenPosition) {
        barFill.forEach(i => i.style.width = i.title)

        class Graphic {
            constructor(width, background){
                this. width = width
                this.background = background
            }
        
            red(){
                return (
                    barFill.style.width = width,
                    barFill.style.backgroundColor = background
                )
            }
        }
        
        const ColorRed = new Graphic('30%','#f00');
        console.log(ColorRed.red())

    } else {
        for (let i of barFill) {
            i.style.width = "20%";
        }
    }

    if (projectContainerPosition < 300) {
        skillsNav.style.color = '#fff';
        projectNav.style.color = '#A5A7A7';
    } else {
        projectNav.style.color = '#fff';
    }

    if (contactContainerPosition < 200) {
        projectNav.style.color = '#fff';
        contactNav.style.color = '#A5A7A7';
    } else {
        contactNav.style.color = '#fff';
    }
});