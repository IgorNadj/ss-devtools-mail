<h1>Mail</h1>

<h2>Test</h2>
$TestForm

<h2>Captured</h2>
<table>
	<thead>
		<tr>
			<th>Created</th>
			<th>From</th>
			<th>To</th>
			<th>Subject</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<% loop Captured.Sort('Created DESC') %>
			<tr>
				<td>$Created.Nice</td>
				<td>$From</td>
				<td>$To</td>
				<td>$Subject</td>
				<td>
					<a href="/dev/mail/view/$ID">view</a>
				</td>
			</tr>
		<% end_loop %>
	</tbody>
</table>


<style>
	table {
		border-collapse: collapse;
	}
	th, td {
		border: 1px solid #aaa;
		vertical-align: top;
	}
</style>