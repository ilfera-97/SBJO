<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site|SBGO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <style type="text/css">
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body
{
  font-family: montserrat;
}
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn
{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 10px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section
{
  background: url(bg1.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh - 80px);
}
table
{
  width: 80%;
  
}

.pro
{
  background:;
  max-width: 100%;
  height: 700px;
  margin-top: -5px;
  margin-left: 0px;
  padding: 10px;
  border: 40px;
  text-align: center;
}

@media (max-width: 952px){
  .checkbtn{
    display: block;
  }
  ul
  {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}

section
{
  background: url('ecc2.png') no-repeat;
  margin-left: 15px;
  background-size: 250px;
  height: 500px;
}
      #search
{
  background: url('rech.png')right no-repeat;
  border-radius: 36px;
  outline: none;
  height: 30px;
  width: 300px;
  padding-left: 30px;
  transition: width 2s;
}

#search:focus{
  width: 500px;
}
      *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}

@media (max-width: 952px )
{
  div.pro
        {
          color: black;
          font-size: 25%;
          width: 100%;
        }
        table
        {
          width: 92%;
          height: 40vh;
          
        }
    label.sms
       {
          color: black;
          text-align:center;
          font-size: 25%;
          width: 80%;
        }

     
            #search
{
  background: white;
  border-radius: 8px;
  outline: none;
  height: 18px;
  width: 200px;
}

#search:focus{
  width: 300px;
}

    section
    {
      background: url('ecc2.png') no-repeat;
      background-size: 90px;
      height: 200px;
    }
}

.content1{
  position: relative;
  margin: 130px auto;
  text-align: center;
  padding: 0 20px;
}
.content1 .text{
  font-size: 2.5rem;
  font-weight: 600;
  color: #202020;
}
.content1 .p{
  font-size: 2.1875rem;
  font-weight: 600;
  color: #202020;
}
footer{
  bottom: 0px;
  width: 100%;
  background: #0082e6;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content .fas
{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: white;
}
.right form .msg{
  margin-top: 10px;
}
.right form input, .right form textarea{
  width: 100%;
  font-size: 1.0625rem;
  background: white;
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form textarea:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: green;
}
.bottom center span{
  color: black;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}
    </style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check"> 

      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>

      <label class="logo">Paroisse SBJO</label>  
      <ul>
        <li><b><a class="active" href="#">Accueil</a></li>
        <li><a href="#">Ann&Pro</a></li>
        <li><a href="#">Comité</a></li>
        <li><a href="cho.php">Chorale</a></li>
        <li><a href="#">Images</a></li>
        <li><a href="#">Vidéos</a></li>
        <li><a href="#">Contacts</a></li></b>
      </ul>
    </nav>

      <section> 
    <div class="search" align="right">
        <form method="post" action="cache.php">
        <input type="search" id="search" name="search" placeholder="Recherche...">
        </form>
    </div>

    <br>
  <label class="sms">
        <div align="center"><H1> MESSAGE DU JOUR </H1></div>
       <div align="center"><p> Alléluia Chers frères et soeurs en Christ! Puisse l'Eternet Dieu vous bénir infiniment.<br> Il est écrit dans 1 Pierre 4 en son verset 20 que nous devons nous aimer les uns les autres.<br> Et un cantique dans notre recueil de chant de culte nous dit la même chose. En ce temps de crise sanitaire mondiale, <br> Dieu nous appelle à nous ternir tous prêts. </p></div>
  </label>

<div class="pro">
         <H1> Programme des cultes de la semaine</H1>
         <h3>THEME: La foi, une ferme assurance </h3>

  <div align="center"> 
    <Table border= "2">
    <tr bgcolor="#aebe11b">
      <td><div align= "center"><b>Horaire</div></td>
      <td><div align= "center"><b>Conduite</div></td>
      <td><div align= "center"><b>Encessement</div></td>
      <td><div align= "center"><b>Prière de 3 personnes</div></td>
      <td><div align= "center"><b>Première lecture</div></td>
      <td><div align= "center"><b>Deuxième lecture</div></td>
      <td><div align= "center"><b>Prédication</div></td>
      <td><div align= "center"><b>Quête</div></td>
      <td><div align= "center"><b>Prière de cmôture</div></td>
    </tr>
    
    <tr>
      <td><div align= "center"><b>Mercredi<br>18h50-20h00</td>
      <td><div align= "center">Dehoto Murphy</div></td>
      <td><div align= "center">V/S/A Benoit ADJADJA</div></td>
      <td><div align= "center">Dehoto Christian ILENGO<br>S/M Cynthia RENGOLA<br>V/S/L Vincent de Paul MABOUNDA</div></td>
      <td><div align= "center">Proverbe 1: 10-15</div></td>
      <td><div align= "center"></div></td>
      <td><div align= "center">Ass. Leader Eric TCHOCKOMANI</div></td>
      <td><div align= "center">Frère Asaphe<br>Soeur Dorelle</div></td>
      <td><div align= "center">A/M Clémence</div></td>
    </tr>
    
    <tr>
      <td><div align= "center"><b>Vendredi<br>13h50-14h00</div></td>
      <td><div align= "center">Dehoto Serge</div></td>
      <td><div align= "center">Ass L Luck KANTE</div></td>
      <td><div align= "center">Frère Lude<br>Dehoto Françoise<br>Leader Traoré</div></td>
      <td colspan="3" bgcolor="white"><div align= "center"><br><b>EXHORTATION</div></td>
      <td><div align= "center"><br></div></td>
      <td><div align= "center"><br></div></td>
    </tr>
    
    <tr>
      <td><div align= "center"><b>Vendredi<br>18h50-20h00</div></td>
      <td><div align= "center">Ass. L OLUWA</div></td>
      <td><div align= "center">Alagba Réné A.</div></td>
      <td><div align= "center">Dehoto Murphy<br>Ass. M Clémence<br>Leader Gaël M.</div></td>
      <td><div align= "center">Mathieu 6: 16-14</div></td>
      <td><div align= "center"> </div></td>
      <td><div align= "center">Ass. Leader Jean-Baptiste</div></td>
      <td><div align= "center">Frère Arnaud<br>Soeur Rébecca</div></td>
      <td><div align= "center">V/S/M Marie-France</div></td>
    </tr>
    
    <tr>
      <td><div align= "center"><b>Dimanche<br>09h50-13h00</div></td>
      <td><div align= "center">V/S/E Salomon H.</div></td>
      <td><div align= "center">V/S/A Benoit ADJADJA</div></td>
      <td><div align= "center">Leader Landry<br>V/S/M Michelle M.<br> Sup/S/E Anatole</div></td>
      <td><div align= "center">Proverbe 1: 10-15</div></td>
      <td><div align= "center">Ephésiens 4: 1-5</div></td>
      <td><div align= "center">Sup/S/E Paul H.</div></td>
      <td><div align= "center">Dehoto Gilbet M.<br>Dehoto Astride</div></td>
      <td><div align= "center">V/S/M Isabelle T.</div></td>
    </tr>
        
    <tr>
      <td><div align= "center"><b>Dimanche<br>18h50-20h00</div></td>
      <td><div align= "center">Dehoto Christian I.</div></td>
      <td><div align= "center">Ass. L OLUWA</div></td>
      <td><div align= "center">Frère Lude<br>Ass/M Viviane<br>Ass. L Luc KANTE</div></td>
      <td><div align= "center">Proverbe 1: 10-15</div></td>
      <td><div align= "center"></div></td>
      <td><div align= "center">Déhoto Murphy</div></td>
      <td><div align= "center">Frère Prince<br>Soeur Elisabeth</div></td>
      <td><div align= "center">S/M Prisca M.</div></td>
    </tr>
  </Table>
  <br><a href="">Télécharger le programme en PDF</a>
</div>
      </section>

      <div class="content1">
      <div class="text">La paroisse SBJ OSCHOFFA vous remercie pour votre visite!</div>
      <div class="p">A Bientôt</div>
      <td><img src="image/12.JPG" height="150px" width="250px"></td>
      <td><img src="image/1.JPG" height="150px" width="250px"></td>
      <td><img src="sbj.png" height="150px" width="250px"></td>
      <td><img src="image/4.JPG" height="150px" width="250px"></td>
    </div>

    <footer>
      <div class="main-content">

        <div class="left box">
          <h2>Infos</h2>
          <div class="content">
            <p>Créer en 2015 en seuelement une année et demi, la paroisse SBJ OSCHOFFA est un témoignage vivant que rien n'est impossible à ceux qui croient en Dieu.
            </p>
            <div class="social">
              <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Matanda, 1ère pompe</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+241 77 794 937</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">ilfera97@gmail.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="https://www.codingnepalweb.com">Murphy</a> | </span>
          <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
        </center>
      </div>
    </footer>

  </body>
</html>