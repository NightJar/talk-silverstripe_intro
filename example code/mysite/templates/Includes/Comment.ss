<li>
	<h5>$Name</h5>
	<p>$Comment</p>
	<% if Replies %>
		<ul>
			<% loop Replies %>
				<% include Comment %>
			<% end_loop %>
		</ul>
	<% end_if %>
</li>
