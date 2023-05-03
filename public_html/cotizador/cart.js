class Cart{
    constructor(x,y,w,h){
        this.cartLeftWallsHeight=h/1.9;
        this.cartRightWallsHeight=this.cartLeftWallsHeight*1.2;
        this.cartLeftWallsWidth=30;
        this.cartRightWallsWidth=this.cartLeftWallsWidth*3.7;
        
        this.body=Matter.Bodies.rectangle(x,y,w,h);

        
        this.groundWidth=w/1.3;
        this.groundHeight=h/3;
        this.cartGround=Matter.Bodies.rectangle(x-(w/15),y + (h/3.3),this.groundWidth,this.groundHeight);


        this.cartLeftWall=Matter.Bodies.rectangle(
            this.cartGround.vertices[0].x,
            this.cartGround.vertices[0].y-(this.cartLeftWallsHeight/2),
            this.cartLeftWallsWidth,this.cartLeftWallsHeight
        );
        this.cartRightWall=Matter.Bodies.rectangle(
            this.cartGround.vertices[1].x+(this.cartLeftWallsWidth*0.5),
            this.cartGround.vertices[1].y-(this.cartRightWallsHeight/2),
            this.cartRightWallsWidth,this.cartRightWallsHeight
        );


        this.cartGround.isStatic=true;
        this.cartLeftWall.isStatic=true;
        this.cartRightWall.isStatic=true;
        Matter.World.add(world,[this.cartGround,this.cartLeftWall,this.cartRightWall]);
        this.w=w;
        this.h=h;
        this.tintColor =  tint(255, 255); 
    }
    show(){

        const pos=this.body.position;
        const angle=this.body.angle;
        const groundPos=this.cartGround.position;
    
        const leftWallPos=this.cartLeftWall.position;
        const rightWallPos=this.cartRightWall.position;
        noStroke();

        // rocket
        push();
        translate(pos.x,pos.y);
        rotate(angle);
        imageMode(CENTER);
        image(cartImg,0,0,this.w,this.h);
        pop();


        // // real body of rocket (just for analisis)
        // push()
        // fill('rgba(0,255,0, 0.5)');
        // rectMode(CENTER);
        // rect(pos.x,pos.y,this.w,this.h);
        // pop();

        // ground of rocket
        push();
        fill('rgba(0,255,0, 0)');
        rectMode(CENTER);
        rect(groundPos.x,groundPos.y,this.groundWidth,this.groundHeight);
        pop();

        // left wall of rocket
        push();
        fill('rgba(0,255,0, 0)');
        rectMode(CENTER);
        rect(leftWallPos.x,leftWallPos.y,this.cartLeftWallsWidth,this.cartLeftWallsHeight);
        pop();

        // right wall  of rocket
        push();
        fill('rgba(0,255,0, 0)');
        rectMode(CENTER);
        rect(rightWallPos.x,rightWallPos.y,this.cartRightWallsWidth,this.cartRightWallsHeight);
        pop();


    }
}