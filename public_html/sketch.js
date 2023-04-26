const {
    Engine,
    World,
    Bodies,
    Mouse,
    MouseConstraint,
    Constraint
} = Matter;

let ground;
const boxes= [];
const leftBoxes= [];
let bird;
let world,engine;
let mConstraint;
let slingshot; 

let dotImg,boxImg;
function preload(){
    dotImg=loadImage('dot.png');
    boxImg=loadImage('equals.png');
    bkgImg = loadImage('back.png');
}

var bodyWidth=document.querySelector('body').clientWidth;
var bodyHeight=document.querySelector('body').clientHeight;
var birdPosX=400;
var birdPosY=bodyHeight/1.333;
var boxesPosY=bodyHeight/1.777;
function setup(){
    const canvas=createCanvas(bodyWidth,bodyHeight);
    engine=Engine.create();
    world=engine.world;
    ground=new Ground(width/2,height-10,width,20);
    for(let i=0;i<7;i++){
        boxes[i]=new Box( bodyWidth - 180 , boxesPosY-i*75, 100, 100 );
    }
    // for(let i=0;i<3;i++){
    //     leftBoxes[i]=new Box( bodyWidth - 350 , boxesPosY-i*75, 100, 100 );
    // }

    bird=new Bird(birdPosX,birdPosY,15);
    slingshot=new SlingShot(birdPosX,birdPosY,bird.body);
    const mouse=Mouse.create(canvas.elt);
    const options={mouse:mouse}
    // A fix for HiDPI displays
    mouse.pixelRatio = pixelDensity();
    mConstraint=MouseConstraint.create(engine,options);
    World.add(world,mConstraint);
}

function keyPressed(){
    if(key==' '){
        World.remove(world,bird.body);
        bird=new Bird(birdPosX,birdPosY,15);
        slingshot.attach(bird.body);
    }
}
function mouseReleased(){
    setTimeout(()=>{
        slingshot.fly();
    },20);
}

function draw(){
    background(bkgImg);
    Matter.Engine.update(engine);
    ground.show();
    for(let box of boxes){
        box.show();
    }
    for(let box of leftBoxes){
        box.show();
    }
    slingshot.show();
    bird.show();
}