<!DOCTYPE html>
<html>
<style type="text/css">
	body {
		font-family: "times news roman";
	  	font-size: 10pt;
	}
	tr, th {
	  border: 5px solid;
	}
</style>


<head>
	<title>Price List</title>
</head>
<body>
	
	<table class="table table-bordered">
      	<thead>
	        <tr>   
	          <th>Kode Barang</th>
	          <th>Nama Barang</th>
	          <th>Jenis Kendaraan</th>
	          <th>H.Jual</th>
	        </tr>
      	</thead>
      	<tbody>
	        @php $no = 1; @endphp
	        @forelse($grouped_array as $key => $val)
	          	<tr>
	          		<td colspan="4"><strong></strong>{{ $key }}</strong></td>
				</tr>

		        @forelse($val as $value)
		        	<tr>
			            <td>{{ $value['kode_barang'] }}</td>
			            <td>{{ $value['nama_barang'] }}</td>
			            <td>{{ $value['jenis_kendaraan'] }}</td>
			            <td>{{ Fungsi::rupiah($value['h_jual']) }}</td>
			          </tr>
		        @empty
		        @endforelse
	        @empty
	        @endforelse
      	</tbody>
    </table>
 
</body>
</html>