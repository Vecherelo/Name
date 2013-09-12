http://www.astroland.ru/name/test/name_m.htm
//php
function calc() {
first = document.loveform.name1.value.toUpperCase();
firstlength = document.loveform.name1.value.length;
second = document.loveform.name2.value.toUpperCase();
secondlength = document.loveform.name2.value.length;
var LoveCount=0;

for (Count=0; Count < firstlength; Count++) {
letter1=first.substring(Count,Count+1);
if (letter1=='А') LoveCount+=5;
if (letter1=='Б') LoveCount+=5; 
if (letter1=='И') LoveCount+=5; 
if (letter1=='Й') LoveCount+=5;
if (letter1=='С') LoveCount+=5;  
if (letter1=='Т') LoveCount+=5; 
if (letter1=='Ы') LoveCount+=5; 
if (letter1=='Н') LoveCount+=5; 
if (letter1=='Е') LoveCount+=5; 
if (letter1=='Ц') LoveCount+=5; 
if (letter1=='Я') LoveCount+=5;
if (letter1=='A') LoveCount+=5;
if (letter1=='B') LoveCount+=5; 
if (letter1=='J') LoveCount+=5; 
if (letter1=='K') LoveCount+=5; 
if (letter1=='S') LoveCount+=5; 
if (letter1=='T') LoveCount+=5;
if (letter1=='F') LoveCount+=5;
if (letter1=='O') LoveCount+=5;
if (letter1=='X') LoveCount+=5;    
}

for (Count=0; Count < secondlength; Count++) {
letter2=second.substring(Count,Count+1);
if (letter2=='А') LoveCount+=5;
if (letter2=='Б') LoveCount+=5; 
if (letter2=='И') LoveCount+=5; 
if (letter2=='Й') LoveCount+=5;
if (letter2=='С') LoveCount+=5;  
if (letter2=='Т') LoveCount+=5; 
if (letter2=='Ы') LoveCount+=5; 
if (letter2=='Н') LoveCount+=5; 
if (letter2=='Е') LoveCount+=5; 
if (letter2=='Ц') LoveCount+=5; 
if (letter2=='Я') LoveCount+=5;
if (letter2=='A') LoveCount+=5;
if (letter2=='B') LoveCount+=5; 
if (letter2=='J') LoveCount+=5; 
if (letter2=='K') LoveCount+=5; 
if (letter2=='S') LoveCount+=5; 
if (letter2=='T') LoveCount+=5;
if (letter2=='F') LoveCount+=5;
if (letter2=='O') LoveCount+=5;
if (letter2=='X') LoveCount+=5;    
}

amount=0;
if (LoveCount>0) amount=  10-((firstlength+secondlength)/2)
if (LoveCount>2) amount= 15-((firstlength+secondlength)/2)
if (LoveCount>4) amount= 20-((firstlength+secondlength)/2)
if (LoveCount>6) amount= 30-((firstlength+secondlength)/2)
if (LoveCount>8) amount=  40-((firstlength+secondlength)/2)
if (LoveCount>10) amount=  50-((firstlength+secondlength)/2)
if (LoveCount>12) amount= 55-((firstlength+secondlength)/2)
if (LoveCount>14) amount=  60-((firstlength+secondlength)/2)
if (LoveCount>16) amount= 65-((firstlength+secondlength)/2)
if (LoveCount>18) amount= 70-((firstlength+secondlength)/2)
if (LoveCount>20) amount= 75-((firstlength+secondlength)/2)
if (LoveCount>22) amount= 80-((firstlength+secondlength)/2)
if (LoveCount>30) amount= 85-((firstlength+secondlength)/2)
if (LoveCount>40) amount= 90-((firstlength+secondlength)/2)
if (LoveCount>50) amount= 95-((firstlength+secondlength)/2)
if (LoveCount>60) amount= 100-((firstlength+secondlength)/2)
if (LoveCount>70) amount= 105-((firstlength+secondlength)/2)
if (LoveCount>80) amount= 110-((firstlength+secondlength)/2)

if (firstlength==0 || secondlength==0) amount= "Err";
if (amount < 0) amount= 0;
if (amount >100) amount=100;

document.loveform.output.value=amount+"%";
}