function Barrier(x,y,w,h,a){
    var options={
        friction:0,
        restitution:0.6,
        isStatic:true,
        angle:a
    }
    this.body= Bodies.rectangle(x,y,w,h,options);
    // this.body.friction=0;
    // this.body.angle=PI/4;
    // console.log(this.body);
    this.w=w;
    this.h=h;
    World.add(engine.world,this.body);

    this.show=function(){
        var pos= this.body.position;
        var angle=this.body.angle;
        push();
        translate(pos.x,pos.y);
        rotate(angle);
        rectMode(CENTER);
        strokeWeight(1);
        noStroke();
        fill(0);
        rect(0,0,this.w,this.h);
        pop();
    }
}
function Circle(x,y,r){
    var options={
        friction:0.01,
        restitution:1
    }
    this.body= Bodies.circle(x,y,r,options);
    // this.body.friction=0;
    this.r=r;

    World.add(engine.world,this.body);

    this.show=function(){
        var pos= this.body.position;
        var angle=this.body.angle;
        push();
        translate(pos.x,pos.y);
        rotate(angle);
        rectMode(CENTER);
        strokeWeight(1);
        stroke(255);
        fill(127);
        ellipse(0,0,this.r*2);
        pop();
    }
}

function Basket(){

    var options={
        friction:0,
        restitution:0.6,
        isStatic:true,
        angle:50.1
    }
    let x= width/1.51;
    let y=height/1.43;
    let w=30;
    let h=height/1.7;

    this.bodyRec1=Bodies.rectangle(
        // x,y
        x,y,
        // width, height
        w, h,
        // options
        options
    );
    this.w=w;
    this.h=h;

    var options2={
        friction:0,
        restitution:0.6,
        isStatic:true,
        angle:44.1
    }
    x= width/1.067;
    y=height/1.43;
    w=30;
    h=height/1.7;
    this.bodyRec2=Bodies.rectangle(
        // x,y
        x,y,
        // width, height
        w,h,
        // options
        options2
    );
    this.wRec2=w;
    this.hRec2=h;

    // aqui se agregan la barreras verdes (no son visibles pero tienen las propiedades fisicas)
    World.add(engine.world,[this.bodyRec1,this.bodyRec2]);
    

    this.show=function(){
        var rect1=this.bodyRec1;
        var rect2=this.bodyRec2;
        var pos= this.bodyRec1.position;
        var pos2= this.bodyRec2.position;
        var angle=this.bodyRec1.angle;
        var angle2=this.bodyRec2.angle;
        // console.log(this.bodyRec1)
        // este es el contenedor verde (solo el dibujo)
        push()
        fill('rgba(0,255,0, 0.25)');
        strokeWeight(15);
        quad(
            // Primer punto superior izquierdo
            windowWidth /1.6, rect1.vertices[0].y, 
            // segundo punto superior derecho
            windowWidth /1.07, rect2.vertices[0].y, 
            // primer punto inferior derecho
            windowWidth /1.1, 850, 
            // segundo punto superior izquierdo
            windowWidth /1.5, 850
        );

        // esta es la barrera lateral izquierda del contenedor verde (solo el dibujo)
        push()
        fill('rgba(0,255,0, 0.15)');
        noStroke();
        translate(pos.x,pos.y);
        rotate(angle);
        rectMode(CENTER);
        rect(0,0,this.w,this.h);
        pop()

        // esta es la barrera lateral derecha del contenedor verde (solo el dibujo)
        push()
        fill('rgba(0,255,0, 0.15)');
        noStroke();
        translate(pos2.x,pos2.y);
        rotate(angle2);
        rectMode(CENTER);
        rect(0,0,this.wRec2,this.hRec2);

        pop();
    }
}