function date(C,Z){var o,R,k,C=C.split("");var x=(Z)?new Date(Z):new Date();for(o=0,R=C.length;o<=R;o++){switch(C[o]){case "d":k=x.getDate();C[o]=(k<10)?"0"+k:k;break;case "D":C[o]=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"][x.getDay()];break;case "j":C[o]=x.getDate();break;case "l":C[o]=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][x.getDay()];break;case "N":k=x.getDay();C[o]=(k==0)?7:k;break;case "S":k=x.getDate().toString().slice(-1);C[o]=["th","st","nd","rd","th","th","th","th","th","th"][k];break;case "w":C[o]=x.getDay();break;case "z":C[o]=Math.ceil((x.getTime()-new Date(x.getFullYear(),0,1).getTime())/86400000);break;case "W":C[o]="";break;case "F":C[o]=["January","February","March","April","May","June","July","August","September","October","November","December"][x.getMonth()];break;case "m":k=x.getMonth()+1;C[o]=(k<10)?"0"+k:k;break;case "M":C[o]=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"][x.getMonth()];break;case "n":C[o]=x.getMonth()+1;break;case "t":k=[31,28,31,30,31,30,31,31,30,31,30,31][x.getMonth()];C[o]=(k==28)?k+Number(date("L")):k;break;case "L":k=x.getFullYear();C[o]=(k%4)?0:(k%400)?(k%100)?1:0:1;break;case "o":C[o]="";break;case "Y":C[o]=x.getFullYear();break;case "y":C[o]=x.getFullYear().toString().slice(2,4);break;case "a":k=x.getHours();C[o]=(k<12)?"am":"pm";break;case "A":k=x.getHours();C[o]=(k<12)?"AP":"PM";break;case "B":C[o]="";break;case "g":k=x.getHours();C[o]=(k<12)?k:k-12;break;case "G":C[o]=x.getHours();break;case "h":k=x.getHours();k=(k<12)?k:k-12;C[o]=(k<10)?"0"+k:k;break;case "H":k=x.getHours();C[o]=(k<10)?"0"+k:k;break;case "i":k=x.getMinutes();C[o]=(k<10)?"0"+k:k;break;case "s":k=x.getSeconds();C[o]=(k<10)?"0"+k:k;break;case "e":C[o]="";break;case "I":C[o]="";break;case "O":C[o]="";break;case "P":C[o]="";break;case "T":C[o]="";break;case "Z":C[o]="";break;case "c":C[o]="";break;case "r":C[o]=date("D, d M Y H:m:s O",x.getTime());break;case "U":C[o]=x.getTime();break;}}return C.join("");}