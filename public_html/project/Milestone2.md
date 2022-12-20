<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Antony Habib (aeh25)</td></tr>
<tr><td> <em>Generated: </em> 12/19/2022 9:22:38 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/aeh25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206878930-a63ef5fe-48c0-436a-ba1d-c8ed4e7bcea2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin or shop owner will be able to add products to inventory<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206878780-1cb90630-b8e6-4fbc-85ce-a6a210d9df0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin or the shop can submit a form on online which will get<br>populated on the table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>1- if we make sure it is an admin by !has_role and we<br>flash you don&#39;t have permission<div>2-&nbsp; then we set a variable table to products<br>table and $get_columns to the property columns on the page and $ignore&nbsp; is<br>to ignore the columns we don&#39;t want to show on the page.</div><div>3- after<br>the admin put in the proper information php takes the request after the<br>submit and populate it back to the proper columns inside the product table.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Feat-adminaddproduct">https://github.com/aeh250/it202-450/tree/Feat-adminaddproduct</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/admin/add_item.php">http://localhost:3000/project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206879328-85a88189-47c3-4865-9585-ee6352d6b0ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>10 products added on the table by the admin or shop owner <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206879449-019e5092-7393-41f4-8d33-836104e15634.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am sorting by cost from the loosest price to the highest price<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206879530-71911d46-b2e2-4724-8265-59d52dc90541.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>each $_GET gets a column and if it there is an empty string<br>and false is to make sure the function return data from the product<br>table and passed to be populated <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>1- we created a stmt prepare to select the select the columns we<br>want and get them by $params and if they don&#39;t work we get<br>flash error fetching items if the column doesn&#39;t exists.<div>2- we create an in_array<br>to make sure we set a default value to prevent sql injection and<br>we also valided the columns&nbsp;</div><div>3- we have created a dynamic query which takes<br>every data passed into the $params variable and execute it.</div><div>4- we first get<br>the column by passing the $_get method passing the column name and default<br>value and false to return data.</div><div>5-&nbsp; we will check if the column is<br>not empty first, if not we going to query the data from the<br>table and put into a variable and pass to the $params to be<br>execute it.</div><div>6- than we submit the form back on the php side through<br>the page to get the proper data from the table&nbsp; and populate it<br>on the page.</div><div>7- and each time we filter or sort it readjust the<br>queries for the filtering</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/shop.php">http://localhost:3000/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206879824-3563d7d4-389b-4be1-8c72-f9497cc3fb85.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop or admin owner will be able to edit any product they would<br>like<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>1- first we get the data base by getDB() and then we set<br>a variable name to passed in as data_query selecting the proper values we<br>need.<div>2- than we set variable with each columns like name to pass into<br>the form through php &nbsp;we you se($_get) the function and we put it<br>in the query and than params to execute it</div><div>3- we try to execute<br>the Params, if failed it will show a message error fetching records&nbsp;</div><div>4- if<br>the columns exits in the product table it will populate on the page.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/admin/list_items.php">http://localhost:3000/project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880019-a8c23257-f038-4236-b027-021dbf01d7a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin or shop owner can see the edit button <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206879899-f93ddc87-e2c1-439a-bffa-6413c9827d89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin or shop owner will be able to edit any product they would<br>like<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207139130-0785c8c1-a3a9-4cb8-b835-cf5b0adc3cf6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this show the edit button for all the products<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880157-86f174ee-5420-4a5b-8f70-b2e59f23da8e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ipad mini unit_ price from 300 to 399<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880195-b31635ca-c630-4d3b-9a0f-8201fbdfaf62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ipad mini Unit_price from 300 to 399<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>1- first we make sure it is the admin by has_role (admin), if<br>not we show you don&#39;t have permission to view this page.<div>2- than we<br>set the variable by columns to get the table columns by get_columns (the<br>variable table_name holds the products table columns).</div><div>3-&nbsp; first we get the appropriate columns<br>from the product table we set ignore for the columns we don&#39;t want<br>to get.</div><div>4- we prepare all the data from the table by * where<br>the id = id to make sure we edit the right product.</div><div>5- after<br>editing the appropriate columns we submit on the php side&nbsp;</div><div>6- we use isset<br>and $_post method as submit we update the data in the product table.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/admin/edit_item.php?id=1">http://localhost:3000/project/admin/edit_item.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880255-9162ebce-2e76-4c6d-93b0-14931dc7fae7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this image include the view button to direct to the product_details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880315-b44c2133-c726-4e44-93ed-12c99937d43c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>by clicking view it send us to the product details page which populated<br>the right information<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>1- than we set the variable by columns to get the table columns<br>by get_columns (the variable table_name holds the products table columns).</div><div><div>2- we prepare all<br>the data from the table by * where the id = id to<br>make sure we edit the right product.</div></div><div>3- then we use map function we<br>put in an argument and we loop over the columns.</div><div>4- after getting the<br>columns and we populate them on the preview details pages.</div><div>5- we also get<br>the average ratings and columns&nbsp;</div><div>6- we also get the ratings and the comments<br>from the ratings table by passing by querying the data from the table<br>and checking the id = id which the product id = ratings id<br>to get all comments and ratings made by users.</div><div>&nbsp;</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/shop.php">http://localhost:3000/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880385-4aadfb40-dfc5-4ff3-8c4e-6c0d48d2767f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>by pressing on add to cart it took the quantity and send it<br>to the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880438-3de030fc-4217-4532-bb9f-0b063659cf27.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am not logged in so I can&#39;t go to the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880474-62ff6f07-b62b-4ae8-bc5c-d4d1cdd6eb4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>when I pressed add to cart it populated in the cart table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>1- we add the quantity on the shop page and it will be<br>passed as the desired quantity in the product table first<div>2- second it will<br>the cart will retrieve the data from the product table and multiple by<br>the unite price to give the accurate total&nbsp;</div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>1- we do post action to make false statement to return with add<br>or remove which are switch statements<div>2- if add we insert into cart product<br>id, desired quantity(the value passed in when we submit the form from the<br>php side) &nbsp;and unit price and user id from the products table.</div><div>3- if<br>it went through it will stmt excuse and show a message add to<br>item to cart success, if not it will not execute and error adding<br>item to cart</div><div>4- this will populate the columns on the cart product id<br>and user id and desired quantity which is set by php and unit_price</div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880541-378088ca-5831-4497-8375-0e935dd914ac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>added multiptle products which shows 3 quantities and correct total price<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>1- we use an api get_cart which gets the right user with user_id<br>getting set from the product table&nbsp;<div>2- get_cart works by setting $_request to true,<br>than we check if the user_id is more than 0 to make sure<br>they exists</div><div>3- we get the columns from the tables items by multiplying the<br>desired_quantity and total_price and assign it to the subtotal.</div><div>4- we execute the result<br>by passing the user_id = id to get the proper user cart.</div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/cart.php">http://localhost:3000/project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880690-0fe7cc22-aa5b-4e03-b72e-d5dcb4cdd9cb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>updated the mini ipad from 3 to 2 quantity <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880764-d9b4399a-e9cf-486f-9375-68ac9dfbd982.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before updating the quantity <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880739-eabb055f-8f28-4095-8727-1df36266c4b3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after updating the quantity to 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880861-5493061b-77d2-4670-b128-46921e3824c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I have the min set to 0 so they can&#39;t go to any<br>negative number<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>1- so first we check how many quantity did the user want by<br>the desired_quantity in the cart table.<div>2-&nbsp; we use a switch statement we set<br>it to update if update than we going to use the update method<br>query to update the proper columns</div><div>3- we use bindvalue to&nbsp; get the columns<br>and we set it to the proper values to populate on the screen.</div><div>4-<br>I have set min length html side to make sure there is no<br>negative values like in the real shop.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880936-294a9829-410d-468f-a294-55d4d6c7966a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this caption is before the deletion of the item<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206880960-752b5a68-a976-4007-a71d-735cfb8f199b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after the deletion of the item from the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207361234-5e36f70c-4599-411f-ad03-cef5316e2f9c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot before clearing the cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207361519-85524fb3-03e4-402d-8b76-eaaa37f61f62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>when I pressed on clear cart it cleared the cart and redirect me<br>to the shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>1- deleting the times happen by first checking the user by get_user_id<div>2- check<br>the cart columns that have have been populate and assign to to cart<br>from result if result is true; if any problem it show error fetching<br>the cart.</div><div>3- we loop over the cart as c to make sure we<br>check if it is there and than we pass in delete in as<br>a value&nbsp;</div><div>4- when we do than we query the table by DELETE from<br>we select the id to delete the whole row we do that by<br>using the switch statement, when it is clear we show a message saying<br>cart is clear.</div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone2">https://github.com/aeh250/it202-450/tree/Milestone2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/aeh25" target="_blank">Grading</a></td></tr></table>