class Gel{
    constructor(x,y,w,h){
        var options={
            friction:0.01,
        }
        this.body=Matter.Bodies.rectangle(x,y,w,h,options);
        this.tintColor =  tint(255, 255); 
        this.w=w;
        this.h=h;
        Matter.World.add(world,this.body);
        // this.body.isStatic=true;
    }
    show(){
        const pos=this.body.position;
        const angle=this.body.angle;

        noStroke();

        // gel
        push();
        translate(pos.x,pos.y);
        rotate(angle);
        imageMode(CENTER);
        image(gelImg,0,0,this.w,this.h);
        pop();
    }
}