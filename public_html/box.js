class Box{
    constructor(x,y,w,h){
        this.body=Matter.Bodies.rectangle(x,y,w,h);
        const options={
            restitution:0.8
        }
        Matter.World.add(world,this.body,options);
        this.w=w;
        this.h=h;
    }
    show(){
        const pos=this.body.position;
        const angle=this.body.angle;
        push();
        translate(pos.x,pos.y);
        rotate(angle);
        fill(255);
        rectMode(CENTER);
        imageMode(CENTER);
        image(boxImg,0,0,this.w,this.h);
        pop();
    }
}