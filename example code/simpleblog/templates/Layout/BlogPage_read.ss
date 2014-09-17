<% with Post %>
	<h1>$Title</h1>
	<p>Written by $Author.Name on $Created.Nice</p>
	<% if $Created != $LastEdited %>
		<p><em>Updated: $LastEdited.Nice</em></p>
	<% end_if %>
	<div class="content">$Body</div>
<% end_with %>
