<?php

include "fpdf/fpdf.php";

$pdf = new FPDF('P','mm','letter');
$pdf->AddPage();
$pdf->SetFont("Arial","",15);

$nom = $_POST['alumno'];
$gra = $_POST['grado'];
$gru = $_POST['grupo'];
$pro = $_POST['profesor'];

$pregunta1A = $_POST['pregunta1a'];
$pregunta1B = $_POST['pregunta1b'];

$opcionA = $_POST['txtOperaciona'];
$opcionB = $_POST['txtOperacionb'];
$opcionC = $_POST['txtOperacionc'];
$opcionD = $_POST['txtOperaciond'];
$opcionE = $_POST['txtOperacione'];



//$pdf->Image('img/IA3-0.png',10,8,22)
$pdf->Image('img/IA3-0.png' , 15 ,2, 30 , 15,'PNG');

$currentDate = date("j/n/Y");
$pdf->SetY(0);
$pdf->SetX(85);
$pdf->Cell(180,27,'Fecha: '.$currentDate,0,0,'C');

$pdf->SetY(22);
$pdf->SetX(15);
$pdf->Cell(180,27,'',1,1,'C');

$pdf->SetFont("Arial","",12);
$pdf->SetY(22);
$pdf->SetX(18);
$pdf->Cell(10,10,utf8_decode("Alumno: _________________________________________________________________"));

$pdf->SetFont("Arial","",12);
$pdf->SetY(22);
$pdf->SetX(35);
$pdf->Cell(10,10,utf8_decode("".$nom));

$pdf->SetY(30);
$pdf->SetX(18);
$pdf->Cell(10,10,utf8_decode("Grado: _________________________"));

$pdf->SetY(30);
$pdf->SetX(45);
$pdf->Cell(10,10,utf8_decode("".$gra));

$pdf->SetY(30);
$pdf->SetX(115);
$pdf->Cell(10,10,utf8_decode("Grupo: _________________________"));

$pdf->SetY(30);
$pdf->SetX(140);
$pdf->Cell(10,10,utf8_decode("".$gru));

$pdf->SetY(38);
$pdf->SetX(18);
$pdf->Cell(10,10,utf8_decode("Profesor: _________________________________________________________________"));

$pdf->SetY(38);
$pdf->SetX(38);
$pdf->Cell(10,10,utf8_decode("".$pro));

$pdf->SetFont("Arial","B",20);
$pdf->SetY(51);
$pdf->SetX(85);
$pdf->Cell(10,10,utf8_decode("Lee y deduce"));

$pdf->SetY(75);
$pdf->SetX(15);
$pdf->Cell(180,180,'',1,1,'C');

$pdf->SetFont("Arial","B",14);
$pdf->SetY(80);
$pdf->SetX(20);
$pdf->Cell(10,10,utf8_decode("Ahorro de papel, trabajo y vergüenza"), 'C');
$pdf->SetFont("Arial","",11);
$pdf->SetY(92);
$pdf->SetX(25);
$pdf->MultiCell(160,6,utf8_decode("Imagina que al terminar de mecanografiar un trabajo escolar que incluye texto e imágenes, te das cuenta de que tiene algunos errores ortográficos, o que dejaste en un lugar equivocado el espacio para pegar una ilustración o monografía. ¿Qué harías? La presentación del trabajo dejaría mucho que desear; por lo que es probable que decidas repetirlo en una nueva hoja de papel."));
$pdf->SetY(123);
$pdf->SetX(25);
$pdf->MultiCell(160,6,utf8_decode("Por fortuna, actualmente se cuenta con los Procesadores de textos, que te permiten corregir los errores de manera rápida y sencilla, y entregar tus trabajos pulcros y ordenados; además, tienes la posibilidad de elegir el tipo, tamaño, estilo y color de letra de tu preferencia, insertar títulos artísticos, imágenes o tablas. En síntesis, te ofrecen numerosos recursos para presentar tus trabajos con gusto y calidad profesional, lo que se refleja en mejores calificaciones."));
$pdf->SetFont("Arial","",13);

$pdf->SetFont("Arial","",14);
$pdf->SetY(165);
$pdf->SetX(15);
$pdf->Cell(10,6,utf8_decode("1. Junto con tus compañeros investiguen los nombres de dos accesorios dE"), 'C');
$pdf->SetY(171);
$pdf->SetX(20);
$pdf->MultiCell(160,6,utf8_decode("Windows con los que se pueden realizar trabajos escritos en la computadora."));

$pdf->SetFont("Arial","",12);
$pdf->SetY(185);
$pdf->SetX(30);
$pdf->Cell(55,6,utf8_decode("".$pregunta1A),0,0,);
$pdf->SetFont("Arial","",12);
$pdf->SetY(195);
$pdf->SetX(30);
$pdf->Cell(55,6,utf8_decode("".$pregunta1B),0,0,);

$pdf->SetFont("Arial","",14);
$pdf->SetY(205);
$pdf->SetX(15);
$pdf->Cell(10,6,utf8_decode("2. Inicia una sesión con el accesorio bloc de notas y escribe tu nombre "), 'C');
$pdf->SetY(211);
$pdf->SetX(20);
$pdf->MultiCell(160,6,utf8_decode("en el primer renglón."));

$pdf->SetFont("Arial","",14);
$pdf->SetY(223);
$pdf->SetX(15);
$pdf->Cell(10,6,utf8_decode("3. Para identificar los datos abre el menú 'Formato' y selecciona el comando "), 'C');
$pdf->SetY(230);
$pdf->SetX(20);
$pdf->MultiCell(160,6,utf8_decode("'Fuente'. Observa el cuadro de diálogo Fuente y responde: "));

$pdf->AddPage();
$pdf->SetFont("Arial","",15);
$pdf->Image('img/IA3-0.png' , 15 ,2, 30 , 15,'PNG');
$currentDate = date("j/n/Y");
$pdf->SetY(0);
$pdf->SetX(85);
$pdf->Cell(180,27,'Fecha: '.$currentDate,0,0,'C');

$pdf->SetY(22);
$pdf->SetX(15);
$pdf->Cell(180,235,'',1,1,'C');

$pdf->SetFont("Arial","",12);
$pdf->SetY(28);
$pdf->SetX(20);
$pdf->Cell(100,6,utf8_decode("a) ¿Qué nombre tiene la fuente o tipo de letra?"),0,1,'l');
$pdf->SetY(28);
$pdf->SetX(120);
$pdf->Cell(50,6,utf8_decode("".$opcionA),'B',1,'C');

$pdf->SetFont("Arial","",12);
$pdf->SetY(38);
$pdf->SetX(20);
$pdf->Cell(100,6,utf8_decode("b) ¿Cuál es el estilo de fuente? "),0,1,'l');
$pdf->SetY(38);
$pdf->SetX(120);
$pdf->Cell(50,6,utf8_decode("".$opcionB),'B',1,'C');

$pdf->SetY(48);
$pdf->SetX(20);
$pdf->Cell(100,6,utf8_decode("c) ¿Cuál es el tamaño de la letra?"),0,1,'l');
$pdf->SetY(48);
$pdf->SetX(120);
$pdf->Cell(50,6,utf8_decode("".$opcionC),'B',1,'C');

$pdf->SetY(58);
$pdf->SetX(20);
$pdf->Cell(100,6,utf8_decode("d) ¿Se puede cambiar el tipo de letra? "),0,1,'l');
$pdf->SetY(58);
$pdf->SetX(120);
$pdf->Cell(50,6,utf8_decode("".$opcionD),0,1,'C');
$pdf->SetY(68);
$pdf->SetX(20);
$pdf->Cell(100,6,utf8_decode("e) ¿Se puede cambiar el tamaño de letra? "),0,1,'l');
$pdf->SetY(68);
$pdf->SetX(120);
$pdf->Cell(50,6,utf8_decode("".$opcionE),0,1,'C');
$pdf->output();


?>