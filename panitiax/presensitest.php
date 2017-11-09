<html>
<head>
	<meta charset="UTF-8">
	<title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
  <link rel="stylesheet" type="text/css" href="jquery-easyui-1.5.2/themes/metro/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery-easyui-1.5.2/themes/icon.css">
<script type="text/javascript" src="jquery-easyui-1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-easyui-1.5.2/jquery.easyui.min.js"></script>

</head>
<body>
  <center>
	<h2>Presensi Pemira 2017</h2>
  <hr>
  <form id="fm" method="post">

			<div class="fitem">
      Prodi:  <select class="easyui-combobox" id="prodi" name="prodi" style="width:15%;">
                <option value="Fisika">Fisika</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Geofisika">Teknik Geofisika</option>
                <option value="Perencanaan Wilayah Dan Kota">Perencanaan Wilayah Dan Kota</option>
                <option value="Teknik Geomatika">Teknik Geomatika</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknik Geologi">Teknik Geologi</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Matematika">Matematika</option>
                <option value="Biologi">Biologi</option>
                <option value="Teknik Industri">Teknik Industri</option>

            </select>
        Angkatan:    <select class="easyui-combobox" id="angkatan" name="angkatan" style="width:10%;">
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>

                </select>

			</div>
			<input type="hidden" name="tombol" id="update" value="">
		</form>
    <div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" onclick="submit()" style="width:90px">Submit</a>
		<a href="javascript:void(0)" class="easyui-linkbutton c6" onclick="clear()" style="width:90px">Clear</a>
	</div>
  <br>
<table id="dg1" title="My Users" class="easyui-datagrid" style="width:800px;height:350px"
        toolbar="#toolbar"
        rownumbers="true"
        fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="nim" width="50">NIM</th>
            <th field="nama" width="50">Nama</th>
            <th field="prodi" width="50">Program Studi</th>
            <th field="angkatan" width="50">Angkatan</th>
            <th field="lastlogin" width="50">Waktu Voting</th>
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="pdf()">Export to PDF</a>
</div>

<script type="text/javascript">
		var url;

		$('#fm').form('clear');
		function submit(){

		//	$('#w').dialog('open').dialog('setTitle','Laporan Detail Penjualan');
			var prodi = $('#prodi').val();
			var angkatan = $('#angkatan').val();

			$('#dg1').datagrid({
				url:'getabsen.php?prodi='+prodi+'&angkatan='+angkatan

			});
			$('#dg1').datagrid('reload');

		}

		function clear(){
			$('#fm').form('clear');
		}

    function pdf(){
      var prodi1		= $("#prodi").val();
			var angkatan1	= $("#angkatan").val();
      window.open('pdf.php?prodi='+prodi1+'&angkatan='+angkatan1 );
    }




		function newUser(){
//			document.getElementById("update").value="Insert Data";
			var str = "Insert Data";
			document.getElementById('update').value = str;
			$('#nosup').numberbox('readonly',false)
			$('#dlg').dialog('open').dialog('setTitle','Informasi Suplier');
			$('#fm').form('clear');
			url = 'suplierins.jsp';
		}
		function editUser(){
//			document.getElementById("update").value="Update Data";
			var str = "Update Data";
			document.getElementById('update').value = str;
			$('#nosup').numberbox('readonly',true)
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Informasi Suplier');
				$('#fm').form('load',row);
				url = 'suplierins.jsp';
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				var str = "Delete Data";
				$.messager.confirm('Confirm','Are you sure you want to delete data?',function(r){
					if (r){
						$.post('suplierins.jsp',{kdtoko:row.kdtoko,tombol:str},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
</center>
</body>
</html>
