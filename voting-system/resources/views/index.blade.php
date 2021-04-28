<x-app-layout>

<div class="filters flex space-x-6">
	<div class="w-1/3">
		<select name="category" id="category" class="w-full rounded-xl borner-none px-4 py-2">
			<option value="Category One">Category One</option>
			<option value="Category Two">Category Two</option>
			<option value="Category Three">Category Three</option>
			<option value="Category Three">Category Four</option>
		</select>
	</div> 
	
<div class="w-2/3">
		<select name="category" id="other_filter" class="w-full rounded-xl borner-none px-4 py-2">
			<option value="Filter One"> One</option>
			<option value="Filter Two">Filter Two</option>
			<option value="Filter Three">Filter Three</option>
			<option value="Filter Four">Filter Four</option>
		</select>
	</div> 

 <div class="w-1/3 relative">
		<input type="search" placeholder="find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8">
	</div> 

</div>

</x-app-layout>