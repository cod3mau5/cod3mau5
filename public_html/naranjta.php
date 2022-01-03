<html>
<head>
  <title>NANITA.EXE</title>
  <style>
    .container{
      width: 30%;
    }
      .orange{
          height:270px;
          width:270px;
          border-radius:50%;
          background: #f3990f;
          justify-content:center;
          align-items:center;
          display: flex;
          justify-content: center;
          margin-top: 50px;
        }
        .orange::before{
          display: block;
          content: '';
          height: 58px;
          width: 12px;
          position: absolute;
          top: 2px;
          background-color: green;
          z-index: 100;
        }
        .orange::after{
          display: block;
          content: '';
          height: 59px;
          width: 25px;
          position: absolute;
          top: -9px;
          left: 102px;
          background-color: olivedrab;
          z-index: 100;
          border-radius: 57%;
          transform: rotate(0.3turn);
        }
        article {
          flex-shrink: 0;
          background: black;
          width: 65px;
          height: 65px;
          border-radius: 100%;
        }

        .div {
          margin-top: 0.75rem;
          position: relative;
          background: black;
          width: 90px; 
          height: 85px;
          border-radius: 0% 0% 50% 50%
        }

        .div:before {
          display: block;
          content: '';
          background: #f3990f;
          width: 90px;
          height: 50px;
        }
        .rama:before{
          height:120px;
          width:25px;
          position:absolute;
          left:30%;
          top:25px;
        }

  </style>
</head>
<body>
  <div class="container">
    <div class="orange">
        <article></article>
      <div class="div"></div>
      <article></article>
    </div>
  </div>
</body>
</html>