
<form action="adm_mng.php" method="post">

	<h1><?php if (isset($message)) { echo $message;
		
	} ?></h1>
	<table>
		<tr>
			<td> Title </td>
			<td> <input type="text" name="title"> </td>
		</tr>
		<tr>
			<td> Hadith </td>
			<td> <textarea name="hadith" cols="20" rows="10"></textarea> </td>
		</tr>
		<tr>
			<td> Reference </td>
			<td> <textarea name="reference" cols="20" rows="10"></textarea> </td>
		</tr>
				<tr>
			<td> Translation </td>
			<td> <textarea name="translation" cols="20" rows="10"></textarea> </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="save category"></td>
		</tr>
	</table>
</form>