<?php
	$idade = $_POST['idade'];
	if($idade != "i0") {
		header('Location: obrigado.html');
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mal me quer</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style>

body{
	background-color:#9363A5 !important; 
	
}
#depoimento{
	height: 590px;
	width: 1260px;
	background-color: #D7B3F4;
	border: 6px solid #391447;
	position:absolute;
	top: 110px;
	left: 100px;
	
}
#rod{
	top: 760px;
	left:0;
	position:absolute;
}
.title{
	font-family: "book Antiqua", "Century Gothic", Century, sans-serif;
	font-size: 2em;
	color: #000;
	text-decoration: underline;
	text-align: center;		
}

.parform {
	font-family: "Century Gothic", Century, Arial, sans-serif;
	font-size: 1.2em;
	color: #000;
}
.erro {
	font-family: "Century Gothic", Century, Arial, sans-serif;
	font-size: 1.3em;
	color: red;
}
.parform2 {
	font-family: "Century Gothic", Century, Arial, sans-serif;
	font-size: 0.8em;
	color: #000;
	margin-top: 7px;
	margin-bottom: 3px;
	margin-right: 6px;
	margin-left: 6px;
	text-align:justify
}
.asterisco{
	color: #391447;
	font-size: 1.3em;	
}
.radio{
	position:relative;
	left: 30px;	
}
.radio2{
	position:relative;
	left: 77px;	
	width:300px;
}
#nome{
	position:relative;
	left:50px;
}
#relato{
	position:relative;
	left:47px;
}
#idade {
	position:relative;
	left:47px;
}
#genero{
	position:relative;
	left:47px;
}
#abusos{
	position : absolute;
	left: 380px;
	bottom: 375px;
}
#agressor{
	position : absolute;
	left: 380px;
	bottom: 232px;
}
#depoi{
	position : absolute;
	left: 900px;
	bottom: 295px;
}
#enviar{
	position: absolute;
	padding: 10px;
	padding-left: 40px;
	padding-right: 40px;
	border-radius: 10px;
	left: 540px;
	bottom: 170px;
	cursor: pointer;
	color: #fff;
	background-color: #431D6D;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
	border-color:#431D6D;
}
#enviar:hover{
	position: absolute;
	padding: 10px;
	padding-left: 40px;
	padding-right: 40px;
	border-radius: 10px;
	left: 540px;
	bottom: 170px;
	cursor:pointer;
	color:#fff;
	background-color:#663F7A;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
	border-color:#663F7A;
}
#aviso{
	position: absolute;
	width: 320px;
	height: 130px;
	border: 2px dotted #391447;
	top: 410px;
	left: 1020px;
	
}
.fisica{
	left:10px;
}
.backimg70 {
	height: auto;
	max-width: 70.3%;
}
</style>
</head>

<body>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="home.html"><img src="imagens/logo.fw.png" /></a>  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Ajuda</a>
    <ul>
      <li><a href="leis.html">Leis</a></li>
      <li><a href="ongs.html">ONGs</a></li>
      <li><a href="projetos.html">Projetos</a></li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Depoimentos</a>
    <ul>
      <li><a href="Depoimentos.html">Dia a dia</a></li>
      <li><a href="Depoimentos_famosos.html">Famosos</a></li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Informa&ccedil;&otilde;es</a>
    <ul>
      <li><a href="comodenunciar.html">Como denunciar</a></li>
      <li><a href="#">Mapa</a></li>
      <li><a href="historia.html">Hist&oacute;ria</a></li>
      <li><a href="tipos.html">Tipos de viol&ecirc;ncia</a></li>
</ul>
  </li>
  <li><a href="galeria.html">Galeria</a>  </li>
  <li><a href="sobrenos.html">Sobre n&oacute;s</a></li>
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<div id="depoimento"> 
  <h1 class="title">Compartilhe seu depoimento e ajude outras mulheres</h1>
  <form action="formulario.php" method="post" name="form_dep" id="form_dep">
  <p id="nome">
        <label for="nome" class="parform">Nome:  </label>
        <input name="nome" type="text" placeholder="Insira seu nome" size="29" maxlength="50" />
        </p>
    <p id="relato" class="parform">
        <label for="relato"><span class="asterisco">*</span> O relato é sobre você?</label>
        <p id="relato">
        <span class="radio">
        <input name="relato" type="radio" value="sim" required="required" /> <span class="parform">Sim</span>
        <input name="relato" type="radio" value="nao"  required="required" /> <span class="parform">Não</span>
        </span>
    </p>
        </p>
    <p id="idade" class="erro">
    <label for="idade">* idade obrigatoria</label>
        <select name="idade" >
          <option value="i0"></option>
          <option value="i1">Até 5 anos</option>
          <option value="i2">6 a 10 anos</option>
          <option value="i3">11 a 15 anos</option>
          <option value="i4">16 a 20 anos</option>
          <option value="i5">20 a 59 anos</option>
          <option value="i6">60 ou +</option>
      </select>
    </p>
    <p id="genero" class="parform">
    <label for="genero"><span class="asterisco">*</span> Qual o seu gênero?</label>
   	<p class="radio2"><input name="genero" type="radio" value="m"  required="required"/> <span class="parform">Masculino</span></p>
    <p class="radio2"><input name="genero" type="radio" value="f" required="required" /> <span class="parform">Feminino</span></p>
    </p>
   	<p class="radio2"><input name="genero" type="radio" value="o"  required="required"/> <span class="parform">Outro: </span><input name="genero" type="text" value="" size="20" maxlength="20" placeholder="Insira seu gênero"/></p>
    </p>
    <div id="abusos">
    <p  class="parform">
    <label for="abusos"><span class="asteristico">*</span> Abusos sofridos pela vítima</label>
    <p class="parform">
      <label>
        <input type="checkbox" name="abusos[]" value="ab1"  />
       Sexual&nbsp &nbsp &nbsp &nbsp &nbsp </label>
      <label>
                     <input type="checkbox" name="abusos[]" value="ab2"  />
        Física&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
      </span>
      <label>
        <input type="checkbox" name="abusos[]" value="ab3" />
        Gênero </label>
      <br />
      <label>
        <input type="checkbox" name="abusos[]" value="ab4" />
        Psícologica</label>
      <label>
        <input type="checkbox" name="abusos[]" value="ab5" />
        Intrafamiliar</label>
      <label>
        <input type="checkbox" name="abusos[]" value="ab6" />
        Doméstica</label>
      <label>
      <br />
        <input type="checkbox" name="abusos[]" value="ab7"/>Ecônomica</label>
      <label>
        <input type="checkbox" name="abusos[]" value="ab8" />Institucional</label>
      <label>
        <input type="checkbox" name="abusos[]" value="ab9" />Outro: </label>
        <input name="outro" type="text" size="8" />
      <br />
    </p>
    </p>
    </div>
    <div id="agressor">
    <p  class="parform">
    <label for="agressor"><span class="asteristico">*</span> Quem é o agressor?</label>
    <p class="parform">
      <label>
        <input type="radio" name="agressor" value="ag1" id="CheckboxGroup1_0" />
       Pai&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
      <label>
      <input type="radio" name="agressor" value="ag2" id="CheckboxGroup1_1" />
         Namorado(a)&nbsp </label>
      </span>
      <label>
      <input type="radio" name="agressor" value="ag3" id="CheckboxGroup1_2"  />
        Tio(a) </label>
      <br />
      <label>
      <input type="radio" name="agressor" value="ag4" id="CheckboxGroup1_3"  required="required" />
        Mãe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
      <label>
      <input type="radio" name="agressor" value="ag5" id="CheckboxGroup1_4"   />
        Cônjuge&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
      <label>
      <input type="radio" name="agressor" value="ag6" id="CheckboxGroup1_5"   />
       Desconhecido</label>
      <label>
      <br />
        <input type="radio" name="agressor" value="ag7" id="CheckboxGroup1_6" />
        irmão(ã)</label>
      <label>
        <input type="radio" name="agressor" value="ag8" id="CheckboxGroup1_7"  />
        Primo(a)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
      <label>
        <input type="radio" name="agressor" value="ag9" id="CheckboxGroup1_8"  />
        Outro: </label><input name="agressor" type="text" size="8" />
      <br />
    </p>
    </p>
    </div>
    <div id="depoi">
    <p class="parform"><br><br><label for="depoimento"><span class="asterisco">*</span>Depoimento: </label></p>
    	<p><textarea name="depoimento" cols="45" rows="10" placeholder="Escreva seu depoimento." required="required"></textarea></p>
        </div>
        <input name="Enviar" type="submit" value="Enviar" id="enviar" class="parform" />
  </form>
       <center> <img src="imagens/mulheres.fw.png" class="backimg70" /> </center>
</div>
<div id="aviso">
<p class="parform2"> Aviso: Perguntas com <span class="asterisco">*</span> são obrigatorias. Deixe o nome em branco para ficar anônimo. Não cite nomes em depoimentos que não são de sua autoria.</p>
<p class="parform2"> Ao compartilhar uma história você ajuda outras mulheres a verem que não estão sozinhas!</p>
</div>
<img src="imagens/Rodape.fw.png" class="backimg" id="rod"/>
</body>
</html>
