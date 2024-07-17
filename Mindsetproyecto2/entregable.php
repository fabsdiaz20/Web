<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="js/entregable.js"></script>
</head>
<body>
<div>
       <h4>Ejercicio 1</h4>
	<h2>Habilidades Ágiles</h2>
       <img src="Imagen/ejercicio.png" id="imag1" onmouseover="mostrarDescripcion()" onmouseout="ocultarDescripcion()">
       <a href="#imag1" onmouseover="mostrarDescripcion()" onmouseout="ocultarDescripcion()"></a>
       <div class="description" id="desc1">Las decisiones que se toman a diario por los lideres se basan en la interpretación de la experiencia que se ha construido en el tiempo por las vivencias que han dejado los aprendizajes, convirtiéndose en creencias que se orientan el como actuar en ciertos momentos. Sabemos que los cambios que han presentado las organizaciones en los últimos años han retado el statu quo de algunos lideres que se han visto como sus creencias son desafiados por formas diferente de gestión, que genera la necesidad de romper paradigmas y adaptarse al contexto actual. El mundo empresarial es diferente al de algunos años atrás, por ejemplo, sabemos que las nuevas generaciones de colaboradores tienen modelos mentales diferentes a los de sus generaciones pasadas, comportamientos, motivación y forma de ver la vida hacen que impacte la forma de liderar estos nuevos perfiles, que en un par de años serán mayoría en el mundo laboral en las organizaciones. La virtualidad también ha permitido acelerar el desarrollo tecnológico para abrazar una mentalidad digital, que requiere nuevas habilidades de gestión de las personas brindando mayor autonomía para la toma de decisiones. Como lideres es necesario adaptarse a las tendencias organizacionales y romper la inercia corporativa para poder sacar el máximo potencial de las personas y contribuir con los objetivos que permitan lograr el propósito de la organización. Es ahí donde el mindset y el pensamiento son conceptos que toman relevancia ya que son los que nos guian los comportamientos.</div>
</div>
    <br><br><hr>
   
<div>
	<br>
	<h4>Ejercicio 2</h4>
       <h2>Convertidor de bases</h2>
       <form name="Convertidor">
	<label>Ingrese base(2-10)</label>
	<input type="text" name="base" id="base"><br><br>
	<label>Ingrese numero: </label>
	<input type="text" name="numero"><br><br>
	<button type="button" onclick="convertirABase10()">Convertir</button>

    <div id="resultado1"></div>
</form>
</div>
<br><br><br><hr>
 <div>
    	<br>
       <h4>Ejercicio 3</h4>
    	<h2>Creacion de triángulos</h2>
	    <form name="triangulo">
		<label>Ingrese el tamaño </label>
		<input type="number" id="tam" name="tamaño"><br><br>
		<label>Ingrese caracter</label>
		<input type="text" id="carc" name="caracter"><br><br>
		<input type="button" onclick="creartriangulo()" value="Aceptar">
		<pre id="resultado" class="resultado"></pre>

	</form>
	<div>
<br><br><br><hr>

<div>
	<br>
	<h4>Ejercicio 4</h4>
	<h1>Calculadora de Signo Zodiacal</h1>
	<form onsubmit="calcularsigno(event)">
		<p>Indica tu fecha de nacimiento</p>
		<select name="dia" id="dia">
                     <option  value="01" >01</option>
		       <option  value="02" >02</option>
			<option  value="03" >03</option>
			<option  value="04" >04</option>
		       <option  value="05" >05</option>
			<option  value="06" >06</option>
			<option  value="07" >07</option>
			<option  value="08" >08</option>
			<option  value="09" >09</option>
		       <option  value="10" >10</option>
			<option  value="11" >11</option>
			<option  value="12" >12</option>
			<option  value="13" >13</option>
			<option  value="14" >14</option>
			<option  value="15" >15</option>
			<option  value="16" >16</option>
			<option  value="17" >17</option>
			<option  value="18" >18</option>
			<option  value="19" >19</option>
			<option  value="20" >20</option>
			<option  value="21" >21</option>
			<option  value="22" >22</option>
		       <option  value="23" >23</option>
			<option  value="24" >24</option>
			<option  value="25" >25</option>
			<option  value="26" >26</option>
		       <option  value="27" >27</option>
			<option  value="28" >28</option>
			<option  value="29" >29</option>
		       <option  value="30" >30</option>
			<option  value="31" >31</option>
		</select>
		<select name="mes" id="mes">
				 
					<option value="1" >Enero</option>
				 
					<option value="2" >Febrero</option>
				 
					<option value="3" >Marzo</option>
				 
					<option value="4" >Abril</option>
				 
					<option value="5" >Mayo</option>
				 
					<option value="6" >Junio</option>
				 
					<option value="7" >Julio</option>
				 
					<option value="8" >Agosto</option>
				 
					<option value="9" >Septiembre</option>
				 
					<option value="10" >Octubre</option>
				 
					<option value="11" >Noviembre</option>
				 
					<option value="12" >Diciembre</option>
	    </select>
	    <select name="año" id="año" >
	    	<option  value="2024" >2024</option>
								<option  value="2023" >2023</option>
								<option  value="2022" >2022</option>
								<option  value="2021" >2021</option>
								<option  value="2020" >2020</option>
								<option  value="2019" >2019</option>
								<option  value="2018" >2018</option>
								<option  value="2017" >2017</option>
								<option  value="2016" >2016</option>
								<option  value="2015" >2015</option>
								<option  value="2014" >2014</option>
								<option  value="2013" >2013</option>
								<option  value="2012" >2012</option>
								<option  value="2011" >2011</option>
								<option  value="2010" >2010</option>
								<option  value="2009" >2009</option>
								<option  value="2008" >2008</option>
								<option  value="2007" >2007</option>
								<option  value="2006" >2006</option>
								<option  value="2005" >2005</option>
								<option  value="2004" >2004</option>
								<option  value="2003" >2003</option>
								<option  value="2002" >2002</option>
								<option  value="2001" >2001</option>
								<option  value="2000" >2000</option>
								<option  value="1999" >1999</option>
								<option  value="1998" >1998</option>
								<option  value="1997" >1997</option>
								<option  value="1996" >1996</option>
								<option  value="1995" >1995</option>
								<option  value="1994" >1994</option>
								<option  value="1993" >1993</option>
								<option  value="1992" >1992</option>
								<option  value="1991" >1991</option>
								<option  value="1990" >1990</option>
								<option  value="1989" >1989</option>
								<option  value="1988" >1988</option>
								<option  value="1987" >1987</option>
								<option  value="1986" >1986</option>
								<option  value="1985" >1985</option>
								<option  value="1984" >1984</option>
								<option  value="1983" >1983</option>
								<option  value="1982" >1982</option>
								<option  value="1981" >1981</option>
								<option  value="1980" >1980</option>
		</select>
		 <button type="submit">Calcular</button>
		 <div class="resultado" id="resultado4">
      
         </div>
	</form>
</div>
<br><hr>
<div>
	<h4>Ejercicio 5</h4>
	<h2>Datos empleados</h2>
	<p>Ingrese el número de empleado:</p>
       <input type="text" id="numeroEmpleado" placeholder="Número de empleado">
       <button onclick="determinarDatos()">Determinar Datos</button>
       <div id="resultado5"></div>
</div>


</body>
</html>