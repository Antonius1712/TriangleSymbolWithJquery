
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<input class="form-control" type="text" name="symbol" placeholder="Symbol (Default adalah '*' )"></input>
				<input class="form-control" type="text" name="segitiga" placeholder="Masukan Jumlah Segitiga"></input>

				<div class="hasil">
					
				</div>
			</div>

			<div class="col-lg-6">
				<input class="form-control" type="text" name="symbol2" placeholder="Symbol (Default adalah '*' )"></input>
				<input class="form-control" type="text" name="segitiga2" placeholder="Masukan Jumlah Segitiga"></input>

				<div class="hasil2">
					
				</div>
			</div>		
		</div>
	</div>

</body>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script type="text/javascript">
		
		$(document).ready(function(){
			var result = '';
			$('body').on('keyup','[name=segitiga],[name=symbol]',function(){
				$('.hasil').html("");
				result = '';
				var value = $('[name=segitiga]').val();
				var symbol = $('[name=symbol]').val();
				if( symbol == '' ){
					symbol = '*';
				}
				for( var q = 0; q < value; q++ ){
					for( var w = -1; w < q; w++ ){
						result += symbol;
					}
					result += '<BR>';
				}

				$('.hasil').append(result);
			});


			var result2 = '';
			$('body').on('keyup','[name=segitiga2],[name=symbol2]',function(){
				$('.hasil2').html("");
				result2 = '';
				var value2 = $('[name=segitiga2]').val();
				var symbol2 = $('[name=symbol2]').val();
				if( symbol2 == '' ){
					symbol2 = '*';
				}
				
				for( var q2 = value2; q2 > 0; q2-- ){
					for( var w2 = 0; w2 < q2; w2++ ){
						result2 += symbol2;
					}
					result2 += '<BR>';
				}

				$('.hasil2').append(result2);
			});
		});

	</script>

</html>
<?

