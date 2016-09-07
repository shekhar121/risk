			var data='';
			
			
			
			var vertical,horizontal,width,height;
			var sdata = {};
			
			vertical = 5;
			horizontal = 5; 
			width = 45;
			height = 45;
			width1 = 45;
			height1 = 45;
			
			sdata[0] = ['888', 'ecf121', 'Demo 0','background: -moz-linear-gradient(45deg, rgba(232,225,223,1) 0%, rgba(196,255,205,1) 50%, rgba(224,185,132,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(232,225,223,1)), color-stop(50%, rgba(196,255,205,1)), color-stop(100%, rgba(224,185,132,1)));background: -webkit-linear-gradient(45deg, rgba(232,225,223,1) 0%, rgba(196,255,205,1) 50%, rgba(224,185,132,1) 100%);background: -ms-linear-gradient(45deg, rgba(232,225,223,1) 0%, rgba(196,255,205,1) 50%, rgba(224,185,132,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#E0B984, endColorstr=#E8E1DF,GradientType=1 );','0', 'R.1', '#fff', '#FF0000'];
			
			sdata[1] = ['fff', 'f1bb21', 'Demo 1','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.2', '#fff', '#FF0000'];

			sdata[2] = ['fff', 'f12121', 'Demo 2','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1'];
			
			sdata[3] = ['fff', '60a94e', 'Demo 3','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','0'];
			sdata[4] = ['888', 'ecf121', 'Demo 4','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','0'];
			
			sdata[5] = ['fff', 'f1bb21', 'Demo 5','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[6] = ['fff', '60a94e', 'Demo 6','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','0'];
			
			sdata[7] = ['fff', '60a94e', 'Demo 7','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','0'];
			
			sdata[8] = ['888', 'ecf121', 'Demo 8','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','0'];
			
			sdata[9] = ['fff', '888', 'Demo 9','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1'];
			
			sdata[10] = ['fff', '888', 'Demo 10','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1'];
			
			
			sdata[11] = ['fff', '888', 'Demo 11','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1'];
			
			sdata[12] = ['fff', '888', 'Demo 12','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1'];
			
			sdata[13] = ['fff', '888', 'Demo 13','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1'];
			
			sdata[14] = ['fff', '888', 'Demo 14','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.9', '#fff', '#FF0000'];
			
			sdata[15] = ['fff', '888', 'Demo 15','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[16] = ['fff', '888', 'Demo 16','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[17] = ['fff', '888', 'Demo 17','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[18] = ['fff', '888', 'Demo 18','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[19] = ['fff', '888', 'Demo 19','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[20] = ['fff', '888', 'Demo 20','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[21] = ['fff', '888', 'Demo 21','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[22] = ['fff', '888', 'Demo 22','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[23] = ['fff', '888', 'Demo 23','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			
			sdata[24] = ['fff', '888', 'Demo 24','background: -moz-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(153,218,255,1)), color-stop(100%, rgba(0,128,128,1)));background: -webkit-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -o-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: -ms-linear-gradient(53deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);background: linear-gradient(37deg, rgba(153,218,255,1) 0%, rgba(0,128,128,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#008080, endColorstr=#99DAFF,GradientType=0 );','1', 'R.10', '#fff', '#FF0000'];
			

 
			
			var cpGradient=false;
			
			 
 			ip = 0;
			for(y = 1; y <= vertical; y++)
			{
				data+="<div class='graph_row'>";
				for(x = 1; x <= horizontal; x++)
				{
					if(cpGradient==true)
					{
						color = "#000";
						bg = 'transparent';
						document.getElementById("graph_container").className = "active";
						document.getElementById("graph_container1").className = "active";
					}else
					{
						gradient = sdata[ip][4];
						if(gradient == 1)
						{
							color = "#" + sdata[ip][0];
							bg = sdata[ip][3];
						}else{
							color = "#" + sdata[ip][0];
							bg = "#"+sdata[ip][1];
						}
					}
					text = sdata[ip][2];
					
					badge = sdata[ip][5];
					badge_txt_color = sdata[ip][6];
					badge_bg_color = sdata[ip][7];
					if(sdata[ip][4]==true)
					{
						data += "<div style='width:"+width+"px;height:"+height+"px;color:"+color+";"+bg+";'><span>"+text+"</span>"+(typeof badge != 'undefined' ? "<span class='badge' style=color:"+badge_txt_color+";background-color:"+badge_bg_color+">"+badge+"</span>":'')+"</div>";
					}else{
						data += "<div style='width:"+width+"px;height:"+height+"px;color:"+color+";background:"+bg+";'><span>"+text+"</span>"+(typeof badge != 'undefined' ? "<span class='badge' style=color:"+badge_txt_color+";background-color:"+badge_bg_color+">"+badge+"</span>":'')+"</div>";
					}
					ip++;
				}
				data+="</div>";
				
				//ip++;
			}
			document.getElementById("graph_container").innerHTML = data;
			document.getElementById("graph_container1").innerHTML = data;
			var x_axix = '',y_axix = '';
			for(x = 0; x <= horizontal; x++)
			{
				if(x==0)
				{
					x_axix += "<div style='width:2px;height:auto;'>"+x+"</div>";
				}else
				{
				x_axix += "<div style='width:"+width+"px;height:auto;'>"+x+"</div>";
				}
			}
			for(y = vertical; y >= 0; y--)
			{
				if(y==0)
				{
					height=10;
				}
				y_axix += "<div style='height:"+height+"px;width:auto;'>"+y+"</div>";
			}
			
			
			
			var x_axix1 = '',y_axix1 = '';
			for(x = 0; x <= horizontal; x++)
			{
				if(x==0)
				{
					x_axix1 += "<div style='width:2px;height:auto;'>"+x+"</div>";
				}else
				{
				x_axix1 += "<div style='width:"+width+"px;height:auto;'>"+x+"</div>";
				}
			}
			for(y = vertical; y >= 0; y--)
			{
				if(y==0)
				{
					height1=10;
				}
				y_axix1 += "<div style='height:"+height1+"px;width:auto;'>"+y+"</div>";
			}
			document.getElementById("x_axix").innerHTML = x_axix;
			document.getElementById("y_axix").innerHTML = y_axix;
			document.getElementById("x_axix1").innerHTML = x_axix1;
			document.getElementById("y_axix1").innerHTML = y_axix1;
