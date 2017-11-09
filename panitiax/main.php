<?php include("../functions/functions.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Panitia Pemira</title>

<link rel="stylesheet" type="text/css" href="jquery-easyui-1.5.2/themes/metro/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery-easyui-1.5.2/themes/icon.css">
<script type="text/javascript" src="jquery-easyui-1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-easyui-1.5.2/jquery.easyui.min.js"></script>
<script type="text/javascript">
	$(function(){
		var tree=[{
			text:"Peserta",
			attributes:{
				url:"search.php"
			}
		},{
			text:"Presensi",
			attributes:{
				url:"absensi.php"
			}
		}];


		$("#tree").tree({
			data:tree,
			lines:true,
			onClick:function(node){
				if(node.attributes){
					openTab(node.text,node.attributes.url);
				}
			}
		});

		function openTab(text,url){
			if($("#tabs").tabs('exists',text)){
				$("#tabs").tabs('select',text);
			}else{
				var content="<iframe frameborder='0' scrolling='auto' style='width:100%;height:100%' src="+url+"></iframe>";
				$("#tabs").tabs('add',{
					title:text,
					closable:true,
					content:content
				});
			}
		}
	});

</script>
</head>

<body class="easyui-layout">

	<div region="north" style="height: 30px;background-color: #E0EDFF">
		<div align="center" style="padding:1px ;">
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-save'" style="width:120px">Data Referensi</a>
				<a href="../tps1.php" target="_blank" class="easyui-linkbutton" data-options="iconCls:'icon-reload'" style="width:120px">Hasil Voting</a>
        <a align="right" href="logout.php" class="easyui-linkbutton" data-options="iconCls:'icon-man'" style="width:100px">Logout</a>
    </div>
			</div>




	<div region="center">
		<div class="easyui-tabs" fit="true" border="false" id="tabs">
			<div title="Home" data-options="iconCls:'icon-help',closable:false" >
				<div align="center" style="padding-top: 100px;"><font color="red" size="10">Welcome to<br>Panel Panitia</font><br>
					<font size="5">
            <br>
					<table>
            <tr>
  						<td>Jumlah Data Voter</td>
  						<td>: <?php countvoter(); ?></td>
  					</tr>
					<tr>
						<td>Jumlah Voting</td>
						<td>: <?php countvote(); ?></td>
					</tr>
				</table></font> </div>
			</div>
		</div>
	</div>
	<div region="west" style="width: 170px;" title="Data Referensi" split="true">
		<div class="easyui-accordion" fit="true" border="false" iconCls="icon-redo">
        <div title="Umum" iconCls="icon-search">
            <ul id="tree"></ul>
            </ul>
        </div>

    	</div>
	</div>



    	</div>
	</div>

	<div region="south" style="height: 25px;" align="center">
	Copyright by Ari Bambang K.
	</div>
</body>
</html>
