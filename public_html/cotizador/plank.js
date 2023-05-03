class Plank{
    constructor(x,y,w,h){
        var options={
            friction:0.01,
        }
        this.body=Matter.Bodies.rectangle(x,y,w,h,options);
        this.tintColor =  tint(255, 255); 
        this.w=w;
        this.h=h;
        this.body.isStatic=true;
        Matter.World.add(world,this.body);
    }
    show(){
        const pos=this.body.position;
        const angle=this.body.angle;

        noStroke();

        //plank
        push();
        translate(pos.x,pos.y);
        fill('rgba(82, 63, 37, 1)');
        rectMode(CENTER);
        rect(0,0,this.w,this.h);
        pop();
    }
}