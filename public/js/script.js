var myCanvas = document.getElementById('canvas');
var c = myCanvas.getContext('2d');
myCanvas.width = myCanvas.scrollWidth;
myCanvas.height = myCanvas.scrollHeight;

//direktur
c.beginPath();
c.moveTo(600,20);
c.lineTo(740,20);
c.lineTo(740,80);
c.lineTo(600,80);
c.lineTo(600,20);

c.strokeStyle = " rgb(88, 69, 4)"
c.lineWidth = 3;
c.stroke();

//text
c.font = "Bold 20px arial";
c.fillStyle = 'black';
c.fillText("Direktur",632,55);

c.font = "Bold 18px arial";
c.fillText("Wakil",445,165);
c.fillText("Direktur 1",428,185);

c.fillText("Wakil",645,165);
c.fillText("Direktur 2",628,185);

c.fillText("Wakil",845,165);
c.fillText("Direktur 3",828,185);

c.fillText("Ketua",445,255);
c.fillText("Perpustakaan",412,275);

c.font = "Bold 15px arial";
c.fillText("Bagian",347,367);
c.fillText("Akuisi dan",332,385);
c.fillText("Pengolahan",327,403);

c.fillText("Bagian",545,367);
c.fillText("Administrasi",525,385);
c.fillText("Dan Layanan",524,403);

//garis
c.beginPath();
c.moveTo(470,140);
c.lineTo(470,110);
c.lineTo(870,110);
c.lineTo(870,140);

c.moveTo(670,80);
c.lineTo(670,140);

c.strokeStyle = " rgb(88, 69, 4)"
c.lineWidth = 3;
c.stroke();


//wadir1
c.beginPath();
c.moveTo(400,140);
c.lineTo(540,140);
c.lineTo(540,200);
c.lineTo(400,200);
c.lineTo(400,140);
//wadir2
c.moveTo(600,140);
c.lineTo(740,140);
c.lineTo(740,200);
c.lineTo(600,200);
c.lineTo(600,140);
//wadir3
c.moveTo(800,140);
c.lineTo(940,140);
c.lineTo(940,200);
c.lineTo(800,200);
c.lineTo(800,140);

c.strokeStyle = " rgb(88, 69, 4)"
c.lineWidth = 3;
c.stroke();


//garis
c.beginPath();
c.moveTo(470,200);
c.lineTo(470,230);

c.strokeStyle = " rgb(88, 69, 4)"
c.lineWidth = 3;
c.stroke();

//ketua perpus
c.beginPath();
c.moveTo(400,230);
c.lineTo(540,230);
c.lineTo(540,290);
c.lineTo(400,290);
c.lineTo(400,230);
//staff1
c.moveTo(300,350);
c.lineTo(440,350);
c.lineTo(440,410);
c.lineTo(300,410);
c.lineTo(300,350);
//staff2
c.moveTo(500,350);
c.lineTo(640,350);
c.lineTo(640,410);
c.lineTo(500,410);
c.lineTo(500,350);

c.strokeStyle = " rgb(88, 69, 4)"
c.lineWidth = 3;
c.stroke();


//garis
c.beginPath();
c.moveTo(470,290);
c.lineTo(470,320);
//garis
c.moveTo(370,350);
c.lineTo(370,320);
c.lineTo(570,320);
c.lineTo(570,350);

c.strokeStyle = " rgb(88, 69, 4)"
c.lineWidth = 3;
c.stroke();


