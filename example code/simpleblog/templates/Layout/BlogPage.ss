<h1>$Title</h1>
<div class="content">$Content</div>
<ul class="posts">
	<% loop Posts %>
		<li class="post">
			<h2><a href="{$Top.Link}read/$ID">$Title</a></h2>
			<p>Written by $Author.Name on $Created.Nice</p>
			<% if $Created != $LastEdited %>
				<p><em>Updated: $LastEdited.Nice</em></p>
			<% end_if %>
		<p class="intro">$Body.FirstParagraph</p>
		</li>
	<% end_loop %>
</ul>
