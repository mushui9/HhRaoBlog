<?php 
include 'header.php';
?>

<STYLE>.todayColor {BACKGROUND-COLOR: aqua}</STYLE>
<SCRIPT language=JavaScript>
<!--
////////////////////////////////��������//////////////////////////////////////
//�������� *��ʾ�ż���
var sFtv = new Array(
"1104*�������",
"0102*��ɺ����",
"0103*��������",
"0104*�Ž�����",
"0224*��������",
"0515*��������",
"0525*��������",
"0823*��������",
"1018*��������",
"1213*��������",
"0825*��������",

"1202*��������",

"0310*�Գ�����",
"0819*��������",
"1126*��贽�����",
"0917*��������",
"0813*С�������",
"0507*�ս�����",
"0625*��Ѹ����",
"0319*������",
"0113*֣������",
"0128*�������",
"0710*��������",

"0101*Ԫ����",
"0214 ���˽�",
"0308 ��Ů��",
"0312 ֲ����",
"0401 ���˽�",
"0501*�Ͷ���",
"0504 �����",
"0601 ��ͯ��",
"1001*�����")

//ũ������ *��ʾ�ż���
var lFtv = new Array(
"1028*�Ͻ�����",
"1117*��������",
"0418*�ϰ�����",

"0204*���X����",
"0905*��Ө����",

"1211*�θ�����",
"0109*�Ƹ�����",
"0116*˼ǫ����",
"0412*�������",
"0510*С������",
"0521*��������",
"0720*��������",
"0808*�������",
"1111*�������",
"1127*��������",

"0128*������",

"0101*����",
"0115 Ԫ����",
"0505*�����",
"0707 ��Ϧ��",
"0715 ��Ԫ��",
"0815*�����",
"0909 ������",
"1208 ���˽�",
"1223 С��",
"0100 ��Ϧ")

//ĳ�µĵڼ������ڼ�
var wFtv = new Array(
"0520 ĸ�׽�",
"0630 ���׽�",
"1144 �ж���")

var lunarInfo=new Array(
0x04bd8,0x04ae0,0x0a570,0x054d5,0x0d260,0x0d950,0x16554,0x056a0,0x09ad0,0x055d2,
0x04ae0,0x0a5b6,0x0a4d0,0x0d250,0x1d255,0x0b540,0x0d6a0,0x0ada2,0x095b0,0x14977,
0x04970,0x0a4b0,0x0b4b5,0x06a50,0x06d40,0x1ab54,0x02b60,0x09570,0x052f2,0x04970,
0x06566,0x0d4a0,0x0ea50,0x06e95,0x05ad0,0x02b60,0x186e3,0x092e0,0x1c8d7,0x0c950,
0x0d4a0,0x1d8a6,0x0b550,0x056a0,0x1a5b4,0x025d0,0x092d0,0x0d2b2,0x0a950,0x0b557,
0x06ca0,0x0b550,0x15355,0x04da0,0x0a5b0,0x14573,0x052b0,0x0a9a8,0x0e950,0x06aa0,
0x0aea6,0x0ab50,0x04b60,0x0aae4,0x0a570,0x05260,0x0f263,0x0d950,0x05b57,0x056a0,
0x096d0,0x04dd5,0x04ad0,0x0a4d0,0x0d4d4,0x0d250,0x0d558,0x0b540,0x0b6a0,0x195a6,
0x095b0,0x049b0,0x0a974,0x0a4b0,0x0b27a,0x06a50,0x06d40,0x0af46,0x0ab60,0x09570,
0x04af5,0x04970,0x064b0,0x074a3,0x0ea50,0x06b58,0x055c0,0x0ab60,0x096d5,0x092e0,
0x0c960,0x0d954,0x0d4a0,0x0da50,0x07552,0x056a0,0x0abb7,0x025d0,0x092d0,0x0cab5,
0x0a950,0x0b4a0,0x0baa4,0x0ad50,0x055d9,0x04ba0,0x0a5b0,0x15176,0x052b0,0x0a930,
0x07954,0x06aa0,0x0ad50,0x05b52,0x04b60,0x0a6e6,0x0a4e0,0x0d260,0x0ea65,0x0d530,
0x05aa0,0x076a3,0x096d0,0x04bd7,0x04ad0,0x0a4d0,0x1d0b6,0x0d250,0x0d520,0x0dd45,
0x0b5a0,0x056d0,0x055b2,0x049b0,0x0a577,0x0a4b0,0x0aa50,0x1b255,0x06d20,0x0ada0,
0x14b63);

var solarMonth=new Array(31,28,31,30,31,30,31,31,30,31,30,31);
var Gan=new Array("��","��","��","��","��","��","��","��","��","��");
var Zhi=new Array("��","��","��","î","��","��","��","δ","��","��","��","��");
var Animals=new Array("��","ţ","��","��","��","��","��","��","��","��","��","��");
var solarTerm = new Array("С��","��","����","��ˮ","����","����","����","����","����","С��","â��","����","С��","����","����","����","��¶","���","��¶","˪��","����","Сѩ","��ѩ","����");
var sTermInfo = new Array(0,21208,42467,63836,85337,107014,128867,150921,173149,195551,218072,240693,263343,285989,308563,331033,353350,375494,397447,419210,440795,462224,483532,504758);
var nMonth= new Array('��','��','��','��','��','��','��','��','��','ʮ','��','��');
var nStr1 = new Array('��','һ','��','��','��','��','��','��','��','��','ʮ');
var nStr2 = new Array('��','ʮ','إ','ئ','��');
var monthName = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

/////////////////////////////////////���ڼ���///////////////////////////////

//====================================== ����ũ�� y���������
function lYearDays(y) {
var i, sum = 348;
for(i=0x8000; i>0x8; i>>=1) sum += (lunarInfo[y-1900] & i)? 1: 0;
return(sum+leapDays(y));
}

//====================================== ����ũ�� y�����µ�����
function leapDays(y) {
if(leapMonth(y))  return((lunarInfo[y-1900] & 0x10000)? 30: 29);
else return(0);
}

//====================================== ����ũ�� y�����ĸ��� 1-12 , û�򷵻� 0
function leapMonth(y) {
return(lunarInfo[y-1900] & 0xf);
}

//====================================== ����ũ�� y��m�µ�������
function monthDays(y,m) {
return( (lunarInfo[y-1900] & (0x10000>>m))? 30: 29 );
}

//====================================== ���ũ��, �������ڿؼ�, ����ũ�����ڿؼ�
//                                       �ÿؼ������� .year .month .day .isLeap
function Lunar(objDate) {

var i, leap=0, temp=0;
var offset   = (Date.UTC(objDate.getFullYear(),objDate.getMonth(),objDate.getDate()) - Date.UTC(1900,0,31))/86400000;

for(i=1900; i<2050 && offset>0; i++) { temp=lYearDays(i); offset-=temp; }

if(offset<0) { offset+=temp; i--; }

this.year = i;

leap = leapMonth(i); //���ĸ���
this.isLeap = false;

for(i=1; i<13 && offset>0; i++) {
//����
if(leap>0 && i==(leap+1) && this.isLeap==false)
{ --i; this.isLeap = true; temp = leapDays(this.year); }
else
{ temp = monthDays(this.year, i); }

//�������
if(this.isLeap==true && i==(leap+1)) this.isLeap = false;

offset -= temp;
}

if(offset==0 && leap>0 && i==leap+1)
if(this.isLeap)
{ this.isLeap = false; }
else
{ this.isLeap = true; --i; }

if(offset<0){ offset += temp; --i; }

this.month = i;
this.day = offset + 1;
}

//==============================���ع��� y��ĳm+1�µ�����
function solarDays(y,m) {
if(m==1)
return(((y%4 == 0) && (y%100 != 0) || (y%400 == 0))? 29: 28);
else
return(solarMonth[m]);
}

//============================== ���� offset ���ظ�֧, 0=����
function cyclical(num) {
return(Gan[num%10]+Zhi[num%12]);
}

//============================== ��������==========
function calElement(sYear,sMonth,sDay,week,lYear,lMonth,lDay,isLeap,cYear,cMonth,cDay) {

this.isToday    = false;
//���
this.sYear      = sYear;   //��Ԫ��4λ����
this.sMonth     = sMonth;  //��Ԫ������
this.sDay       = sDay;    //��Ԫ������
this.week       = week;    //����, 1������
//ũ��
this.lYear      = lYear;   //��Ԫ��4λ����
this.lMonth     = lMonth;  //ũ��������
this.lDay       = lDay;    //ũ��������
this.isLeap     = isLeap;  //�Ƿ�Ϊũ������?
//����
this.cYear      = cYear;   //����, 2������
this.cMonth     = cMonth;  //����, 2������
this.cDay       = cDay;    //����, 2������

this.color      = '';

this.lunarFestival = ''; //ũ������
this.solarFestival = ''; //��������
this.solarTerms    = ''; //����
}

//===== ĳ��ĵ�n������Ϊ����(��0С������)
function sTerm(y,n) {
var offDate = new Date( ( 31556925974.7*(y-1900) + sTermInfo[n]*60000  ) + Date.UTC(1900,0,6,2,5) );
return(offDate.getUTCDate());
}

//============================== ���������ؼ� (y��,m+1��)==========================================
/*
����˵��: ���������µ��������Ͽؼ�

ʹ�÷�ʽ: OBJ = new calendar(��,��������);

OBJ.length      ���ص��������
OBJ.firstWeek   ���ص���һ������

�� OBJ[����].�������� ����ȡ�ø���ֵ

OBJ[����].isToday  �����Ƿ�Ϊ���� true �� false

���� OBJ[����] ���Բμ� calElement() �е�ע��
*/
function calendar(y,m) {

var sDObj, lDObj, lY, lM, lD=1, lL, lX=0, tmp1, tmp2, tmp3;
var cY, cM, cD; //����,����,����
var lDPOS = new Array(3);
var n = 0;
var firstLM = 0;

sDObj = new Date(y,m,1,0,0,0,0);    //����һ������

this.length    = solarDays(y,m);    //������������
this.firstWeek = sDObj.getDay();    //��������1�����ڼ�

////////���� 1900��������Ϊ������(60����36)
if(m<2) cY=cyclical(y-1900+36-1);
else cY=cyclical(y-1900+36);
var term2=sTerm(y,2); //��������

////////���� 1900��1��С����ǰΪ ������(60����12)
var firstNode = sTerm(y,m*2) //���ص��¡��ڡ�Ϊ���տ�ʼ
cM = cyclical((y-1900)*12+m+12);

//����һ���� 1900/1/1 �������
//1900/1/1�� 1970/1/1 ���25567��, 1900/1/1 ����Ϊ������(60����10)
var dayCyclical = Date.UTC(y,m,1,0,0,0,0)/86400000+25567+10;

for(var i=0;i<this.length;i++) {

if(lD>lX) {
sDObj = new Date(y,m,i+1);    //����һ������
lDObj = new Lunar(sDObj);     //ũ��
lY    = lDObj.year;           //ũ����
lM    = lDObj.month;          //ũ����
lD    = lDObj.day;            //ũ����
lL    = lDObj.isLeap;         //ũ���Ƿ�����
lX    = lL? leapDays(lY): monthDays(lY,lM); //ũ���������һ��

if(n==0) firstLM = lM;
lDPOS[n++] = i-lD+1;
}

//�������������·ֵ�����, ������Ϊ��
if(m==1 && (i+1)==term2) cY=cyclical(y-1900+36);
//����������, �ԡ��ڡ�Ϊ��
if((i+1)==firstNode) cM = cyclical((y-1900)*12+m+13);
//����
cD = cyclical(dayCyclical+i);

//sYear,sMonth,sDay,week,
//lYear,lMonth,lDay,isLeap,
//cYear,cMonth,cDay
this[i] = new calElement(y, m+1, i+1, nStr1[(i+this.firstWeek)%7],
lY, lM, lD++, lL,
cY ,cM, cD );
}

//����
tmp1=sTerm(y,m*2  )-1;
tmp2=sTerm(y,m*2+1)-1;
this[tmp1].solarTerms = solarTerm[m*2];
this[tmp2].solarTerms = solarTerm[m*2+1];
if(m==3) this[tmp1].color = 'red'; //������ɫ

//��������
for(i in sFtv)
if(sFtv[i].match(/^(\d{2})(\d{2})([\s\*])(.+)$/))
if(Number(RegExp.$1)==(m+1)) {
this[Number(RegExp.$2)-1].solarFestival += RegExp.$4 + ' ';
if(RegExp.$3=='*') this[Number(RegExp.$2)-1].color = 'red';
}

//���ܽ���
for(i in wFtv)
if(wFtv[i].match(/^(\d{2})(\d)(\d)([\s\*])(.+)$/))
if(Number(RegExp.$1)==(m+1)) {
tmp1=Number(RegExp.$2);
tmp2=Number(RegExp.$3);
if(tmp1<5)
this[((this.firstWeek>tmp2)?7:0) + 7*(tmp1-1) + tmp2 - this.firstWeek].solarFestival += RegExp.$5 + ' ';
else {
tmp1 -= 5;
tmp3 = (this.firstWeek+this.length-1)%7; //�������һ������?
this[this.length - tmp3 - 7*tmp1 + tmp2 - (tmp2>tmp3?7:0) - 1 ].solarFestival += RegExp.$5 + ' ';
}
}

//ũ������
for(i in lFtv)
if(lFtv[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
tmp1=Number(RegExp.$1)-firstLM;
if(tmp1==-11) tmp1=1;
if(tmp1 >=0 && tmp1<n) {
tmp2 = lDPOS[tmp1] + Number(RegExp.$2) -1;
if( tmp2 >= 0 && tmp2<this.length && this[tmp2].isLeap!=true) {
this[tmp2].lunarFestival += RegExp.$4 + ' ';
if(RegExp.$3=='*') this[tmp2].color = 'red';
}
}
}

//����
if(y==tY && m==tM) this[tD-1].isToday = true;
}

//============================================== ��������==================================
function cDay(d){
var s;

switch (d) {
case 10:
s = '��ʮ'; break;
case 20:
s = '��ʮ'; break;
break;
case 30:
s = '��ʮ'; break;
break;
default :
s = nStr2[Math.floor(d/10)];
s += nStr1[d%10];
}
return(s);
}

//===========================================����������=========================================
var cld;
function drawCld(SY,SM) {
var i,sD,s,size;
cld = new calendar(SY,SM);
now = new Date();

NOWDAY.innerHTML = now.getDate() +  "&nbsp;" + monthName[now.getMonth()]  + "&nbsp;" + now.getFullYear();


for(i=0;i<42;i++) {

sObj=eval('SD'+ i);
lObj=eval('LD'+ i);

sObj.className = '';

sD = i - cld.firstWeek;

if(sD>-1 && sD<cld.length) { //������
sObj.innerHTML = sD+1;

if(cld[sD].isToday) sObj.className = 'todayColor'; //������ɫ

sObj.style.color = cld[sD].color; //����������ɫ

if(cld[sD].lDay==1) //��ʾũ����
lObj.innerHTML = '<b>'+(cld[sD].isLeap?'��':'') + nMonth[cld[sD].lMonth-1] + '��' + (monthDays(cld[sD].lYear,cld[sD].lMonth)==29?'С':'��')+'</b>';
else //��ʾũ����
lObj.innerHTML = cDay(cld[sD].lDay);

GZ.innerHTML = 'ũ��' + cyclical(SY-1900+36) + Animals[(SY-4)%12] + '��' + nMonth[cld[sD].lMonth-1] + '��';

s=cld[sD].lunarFestival;
if(s.length>0) { //ũ������
if(s.length>6) s = s.substr(0, 4)+'...';
s = s.fontcolor('red');
}
else { //��������
s=cld[sD].solarFestival;
if(s.length>0) {
size = (s.charCodeAt(0)>0 && s.charCodeAt(0)<128)?8:4;
if(s.length>size+2) s = s.substr(0, size)+'...';
s= s.fontcolor('red');
}
else { //إ�Ľ���
s=cld[sD].solarTerms;
if(s.length>0) s = s.fontcolor('limegreen');
}
}

if(cld[sD].solarTerms=='����') s = '������'.fontcolor('red');
if(cld[sD].solarTerms=='â��') s = 'â�ֽ�'.fontcolor('red');
if(cld[sD].solarTerms=='����') s = '������'.fontcolor('red');
if(cld[sD].solarTerms=='����') s = '������'.fontcolor('red');



if(s.length>0) lObj.innerHTML = s;

}
else { //������
sObj.innerHTML = '';
lObj.innerHTML = '';
}
}
}

/////////////////////////////�������º�������ʾ/////////////////////////////////
function changeCld() {
var y,m;
y=CLD.SY.selectedIndex+1900;
m=CLD.SM.selectedIndex;
drawCld(y,m);
}

/////////////////////////////////////////////////////////��ʼ��/////////
var Today = new Date();
var tY = Today.getFullYear();
var tM = Today.getMonth();
var tD = Today.getDate();

function initial() {
  
   dStyle = detail.style;
   CLD.SY.selectedIndex=tY-1900;
   CLD.SM.selectedIndex=tM;
   drawCld(tY,tM);
}
//-->
</SCRIPT>

<body onload=initial()>

<DIV id=detail>
<FORM name=CLD>
<h3><a href="calendar.php" id=NOWDAY></a></h3>
<center>
<TABLE>
	<TR>	
        <TD colSpan=7>
			<b><FONT>��Ԫ
			<SELECT onchange=changeCld() name=SY> 
				<SCRIPT language=JavaScript><!--
				for(i=1900;i<2050;i++) document.write('<option>'+i)
			//--></SCRIPT></SELECT>��
			<SELECT onchange=changeCld() name=SM> 
				<SCRIPT language=JavaScript><!--
				for(i=1;i<13;i++) document.write('<option>'+i)
			//--></SCRIPT></SELECT>�� 
			</FONT>
			<FONT id=GZ></FONT></b>
		</TD>
	</TR>
    <TR>
        <TD><FONT color=blue>��</FONT></TD>
        <TD>һ</TD>
        <TD>��</TD>
        <TD>��</TD>
        <TD>��</TD>
        <TD>��</TD>
        <TD>��</TD>
	</TR>
    <SCRIPT language=JavaScript><!--
            var gNum
            for(i=0;i<6;i++) {
               document.write('<tr>')
               for(j=0;j<7;j++) {
                  gNum = i*7+j
                  document.write('<td id="GD' + gNum +'" ><font id="SD' + gNum +'" size=7 ')
                  if(j == 0) document.write(' color=blue')
                  document.write(' TITLE=""> </font><br><font id="LD' + gNum + '" size=2 > </font></td>')
               }
               document.write('</tr>')
            }
    //--></SCRIPT>
</TABLE>
</center>
</FORM>
</DIV>
</body>

<?php 
include 'footer.php';
?>