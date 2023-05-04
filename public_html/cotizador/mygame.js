var windowWidth, windowHeight;
// module aliases
var Engine= Matter.Engine,
    Constraint=Matter.Constraint,
    MouseConstraint = Matter.MouseConstraint,
    Mouse = Matter.Mouse,
    World=Matter.World,
    Bodies=Matter.Bodies;


var engine, world, 
planks=[],boundaries=[],
ground,mConstraint,bkgImg,cartImg;

var total = 0;
var messageTotal=document.querySelector('#total span');
var containerTotal=document.querySelector('#total');

function preload(){
    // bkgImg = loadImage('supermarket.jpg');
    bkgImg = loadImage('supermarket_SPANISH.jpg');
    cartImg=loadImage('blue_cart.png')
    gelImg=loadImage('gel.png');
    wineImg=loadImage('wine.png');
    milkImg=loadImage('milk.png');
    sauceImg=loadImage('sauce.png');
    sausageImg=loadImage('sausage.png');
    milkImg=loadImage('milk.png');
    cheeseImg=loadImage('cheese.png');
    blueCheeseImg=loadImage('blue_cheese.png');
    purpleCheeseImg=loadImage('purple_cheese.png');
}

function setup(){
    windowWidth = window.innerWidth;
    windowHeight = window.innerHeight;
    var canvas=createCanvas(windowWidth ,windowHeight );
    checkOrientation();
    canvas.style('display', 'block');
    // document.body.style.overflow = 'hidden';
    engine= Engine.create();
    world=engine.world;
    wallLeft=boundaries.push(new Barrier(-140,height/2,300,height,0));
    wallRight=boundaries.push(new Barrier(width + 140,height/2,300,height,0));
    ground=boundaries.push(new Barrier(width/2,height + 120,width, 300 ,0));
    roof=boundaries.push(new Barrier(width/2,-140,width, 300 ,0));

    let planksWidth=width/9;
    planks.push(new Plank(width/11.35,height/1.91,planksWidth,9));
    planks.push(new Plank(width/4.75,height/1.91,planksWidth,9));
    planks.push(new Plank(width/11.35,height/1.56,planksWidth,9));
    planks.push(new Plank(width/4.75,height/1.56,planksWidth,9));
    planks.push(new Plank(width/11.35,height/1.31,planksWidth,9));
    planks.push(new Plank(width/4.75,height/1.31,planksWidth,9));
    planks.push(new Plank(width/11.35,height/1.135,planksWidth,9));
    planks.push(new Plank(width/4.75,height/1.135,planksWidth,9));


    winePosX=planks[0].body.position.x;
    winePosY=planks[0].body.position.y - height/50;

    cheesePosX=planks[1].body.position.x;
    cheesePosY=planks[1].body.position.y - height/50;
    blueCheesePosX=planks[2].body.position.x;
    blueCheesePosY=planks[2].body.position.y - height/50;

    purpleCheesePosX=planks[3].body.position.x;
    purpleCheesePosY=planks[3].body.position.y - height/50;
    
    sasuagePosX=planks[4].body.position.x;
    sasuagePosY=planks[4].body.position.y - height/50;

    gelPosX=planks[5].body.position.x;
    gelPosY=planks[5].body.position.y - height/50;

    milkPosX=planks[6].body.position.x;
    milkPosY=planks[6].body.position.y - height/50;
    
    saucePosX=planks[7].body.position.x;
    saucePosY=planks[7].body.position.y - height/50;

    cart=new Cart(width- (width/5),height/1.35,width/3.8,height/2.5);

    sausage= new Sausage(sasuagePosX,sasuagePosY,width/17,height/16);
    sauce= new Sauce(saucePosX,saucePosY,width/40,height/12);
    gel= new Gel(gelPosX,gelPosY,width/40,height/12);
    milk= new Milk(milkPosX,milkPosY,width/40,height/12);
    wine= new Wine(winePosX,winePosY,width/40,height/12);
    cheese= new Cheese(cheesePosX,cheesePosY,width/20,height/13.5);
    blueCheese= new BlueCheese(blueCheesePosX,blueCheesePosY,width/20,height/13.5);
    purpleCheese= new PurpleCheese(purpleCheesePosX,purpleCheesePosY,width/20,height/13.5);
    

    var canvasMouse=Mouse.create(canvas.elt);
    canvasMouse.pixelRatio=pixelDensity();
    var mouseOptions={
        mouse:canvasMouse 
    }
    mConstraint=MouseConstraint.create(engine,mouseOptions)
    World.add(world,mConstraint);
}

function draw(){

    background(bkgImg);
    Engine.update(engine);

    for(var i=0;i<boundaries.length;i++){
        boundaries[i].show();
    }

    for(i=0;i<planks.length;i++){
        planks[i].show();
    }

    var limitLeftX=cart.cartLeftWall.vertices[0].x;
    var limitLeftY=cart.cartLeftWall.vertices[0].y;
    var limitRighttX=cart.cartRightWall.vertices[0].x;
    var limitBottomY=cart.cartLeftWall.vertices[3].y;


    milk.show();
    wine.show();
    gel.show();
    sauce.show();
    sausage.show();
    cheese.show();
    blueCheese.show();
    purpleCheese.show();

   
    let p1Exist = (
        gel.body.position.x > limitLeftX && 
        gel.body.position.y > limitLeftY &&
        gel.body.position.x < limitRighttX &&
        gel.body.position.y < limitBottomY
    );
    let p2Exist = (
        sauce.body.position.x > limitLeftX && 
        sauce.body.position.y > limitLeftY &&
        sauce.body.position.x < limitRighttX &&
        sauce.body.position.y < limitBottomY
    );
    let p3Exist = (
        milk.body.position.x > limitLeftX && 
        milk.body.position.y > limitLeftY &&
        milk.body.position.x < limitRighttX &&
        milk.body.position.y < limitBottomY
    );
    let p4Exist = (
        wine.body.position.x > limitLeftX && 
        wine.body.position.y > limitLeftY &&
        wine.body.position.x < limitRighttX &&
        wine.body.position.y < limitBottomY
    );
    let p5Exist = (
        sausage.body.position.x > limitLeftX && 
        sausage.body.position.y > limitLeftY &&
        sausage.body.position.x < limitRighttX &&
        sausage.body.position.y < limitBottomY
    );
    let p6Exist = (
        cheese.body.position.x > limitLeftX && 
        cheese.body.position.y > limitLeftY &&
        cheese.body.position.x < limitRighttX &&
        cheese.body.position.y < limitBottomY
    );
    let p7Exist = (
        blueCheese.body.position.x > limitLeftX && 
        blueCheese.body.position.y > limitLeftY &&
        blueCheese.body.position.x < limitRighttX &&
        blueCheese.body.position.y < limitBottomY
    );
    let p8Exist = (
        purpleCheese.body.position.x > limitLeftX && 
        purpleCheese.body.position.y > limitLeftY &&
        purpleCheese.body.position.x < limitRighttX &&
        purpleCheese.body.position.y < limitBottomY
    );
    total= calculateTotal(p1Exist,p2Exist,p3Exist,p4Exist,p5Exist,p6Exist,p7Exist,p8Exist)


    if(p1Exist || p2Exist || p3Exist || p4Exist|| p5Exist||p6Exist||p7Exist||p8Exist){
        messageTotal.innerHTML='$'+total;
        containerTotal.style="display:block";
        
    }else{
        cart.tintColor =  tint(255, 255); 
        messageTotal.innerHTML='$'+total;
        containerTotal.style="display:none";
    }

    cart.show();

}

function windowResized() {
    windowWidth = window.innerWidth;
    windowHeight = window.innerHeight;
    checkOrientation();
    resizeCanvas(windowWidth, windowHeight);
  
    // Actualiza las posiciones y tamaños de los elementos que dependen de las dimensiones de la ventana
    boundaries[0].update(-140, height / 2, 300, height);
    boundaries[1].update(width + 140, height / 2, 300, height);
    boundaries[2].update(width / 2, height + 120, width, 300);
    boundaries[3].update(width / 2, -140, width, 300);
  
    let planksWidth = width / 9;
    planks[0].update(width / 11.35, height / 1.91, planksWidth, 9);
    planks[1].update(width / 4.75, height / 1.91, planksWidth, 9);
    planks[2].update(width / 11.35, height / 1.56, planksWidth, 9);
    planks[3].update(width / 4.75, height / 1.56, planksWidth, 9);
    planks[4].update(width / 11.35, height / 1.31, planksWidth, 9);
    planks[5].update(width / 4.75, height / 1.31, planksWidth, 9);
    planks[6].update(width / 11.35, height / 1.135, planksWidth, 9);
    planks[7].update(width / 4.75, height / 1.135, planksWidth, 9);
  
    cart.update(width - (width / 5), height / 1.35, width / 3.8, height / 2.5);
  
    wine.update(planks[0].body.position.x, planks[0].body.position.y - height / 50, width / 40, height / 12);
    cheese.update(planks[1].body.position.x, planks[1].body.position.y - height / 50, width / 20, height / 13.5);
    blueCheese.update(planks[2].body.position.x, planks[2].body.position.y - height / 50, width / 20, height / 13.5);
    purpleCheese.update(planks[3].body.position.x, planks[3].body.position.y - height / 50, width / 20, height / 13.5);
    sausage.update(planks[4].body.position.x, planks[4].body.position.y - height / 50, width / 17, height / 16);
    gel.update(planks[5].body.position.x, planks[5].body.position.y - height / 50, width / 40, height / 12);
    milk.update(planks[6].body.position.x, planks[6].body.position.y - height / 50, width / 40, height / 12);
 
}

function calculateTotal(p1Exist,p2Exist,p3Exist,p4Exist,p5Exist,p6Exist,p7Exist,p8Exist){
    let p1=p1Exist?50:0;
    let p2=p2Exist?100:0;
    let p3=p3Exist?200:0;
    let p4=p4Exist?500:0;
    let p5=p5Exist?150:0;
    let p6=p6Exist?250:0;
    let p7=p7Exist?250:0;
    let p8=p8Exist?250:0;
    return p1+p2+p3+p4+p5+p6+p7+p8;
}