<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Antony Habib (aeh25)</td></tr>
<tr><td> <em>Generated: </em> 12/19/2022 9:51:46 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/aeh25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206917518-f68124a2-bf20-41ce-a123-0151d83ab225.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this order table showing the orders from every user <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206917606-813f97ed-3a30-4e3e-99ce-cf5e8c27a7ea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this orderitems populated after every item been add to the orders table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206917645-d20d5234-93db-48ff-a8e2-6fb51d638cc5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this form page is what will make the orders table populate<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207366664-1a30f240-d83c-4137-b9cc-337a71626e77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>i have implemented pending in the checkout make  sure the user knows<br>how much they own with back to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206918214-62037d4b-7f3a-4138-8fe9-57485e9fab2f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here we check the viladate everything we pass it if yes than we<br>execute <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206918606-470c5713-7e90-4fda-9d23-b46324b6bb49.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows that is low in stock<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206918794-e6d5baa2-94cb-45ef-b7c8-03963bceebed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>because entered a low amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>1- by clicking the button I am targeting the API call get_purchase<div>2- purchase<br>cart receive have 2 parameters one is request which is the request and<br>the other is true when both are true or checked it goes to&nbsp;<br>start session function</div><div>3- we get the user_id from cart and we get the<br>data from the table&#39;s cart and we get the total by multiplying the<br>unit cart by unit_price from cart&nbsp;</div><div>4- than we insert to the ordres table<br>by first begin_transaction function and than sign it to query variable than execute<br>the query</div><div>5- than we update the stock from the products table by the<br>desired_quantity from the cart table&nbsp;</div><div>6-after that we insert to the orderhistory table and<br>if it doesn&#39;t work we flash&nbsp;<span style="color: rgb(206, 145, 120); background-color: rgb(30, 30,<br>30); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;">Error mapping cart data to order<br>history.</span></div><div>7-&nbsp; we update the inventory with the orderitems table&nbsp;</div><div>8- lastly we clear the<br>cart and the cart table&nbsp;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone3">https://github.com/aeh250/it202-450/tree/Milestone3</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/Checkout.php">http://localhost:3000/project/Checkout.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206920602-af430aa4-5871-41f6-b512-4178f3edb150.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>everything is included from the confirmation and details about the orders <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>1- after clearing the cart with the API call<div>2- we need to select<br>the columns from the orders table were id = user_id to get the<br>orders only associated with the user&nbsp;</div><div>3- to get the orders populated we need<br>to check the ordersitems table and get the total on the page we<br>need to multiply the unit_price * desired_quantity to get the total price for<br>each product if the user select same item with multiple desired quantity&nbsp;</div><div>4- than<br>we populated on the page with a thank you message if the order<br>went through.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone3">https://github.com/aeh250/it202-450/tree/Milestone3</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/confirmation_page.php?last_inserted_orderId=80">http://localhost:3000/project/confirmation_page.php?last_inserted_orderId=80</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206920823-28c09834-250e-4dd4-9640-2db3a7818cb3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the user have made 2 orders that is shown in the view history<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206920872-3f976ee4-571d-47b3-9e11-c8eafea07b28.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the order items page after purchase<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>1- first we login as a normal user by check the if_login().<div>2-&nbsp; than<br>we query the data for orders table to get all the orders.</div><div>3-&nbsp;than we<br>pass in the get_user_id which gets the id from the product table and<br>pass it to :uid to get the specific user&nbsp;</div><div>4- than we assign each<br>category to variable we extract the data from orders table and we populated<br>on the screen</div><div>5- we passed to the html form where we use the<br>$role function and the data variable we extract from the columns&nbsp;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone3">https://github.com/aeh250/it202-450/tree/Milestone3</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/orders_details.php?order_id=81">http://localhost:3000/project/orders_details.php?order_id=81</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921317-7af4a295-d2a4-4535-a43d-f814010f8741.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here in the admin page it shows multiple users purchasing from the shop<br>page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921445-64d8d8ee-6505-41e8-82bf-bcbf1090e3c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image is from users page details from something they purchased from the store<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>1- first we login an as the admin, if not flash a message<br>you don&#39;t have a permission.<div>2-&nbsp; than we query the data for orders table<br>to get all the orders and join from the product table to get<br>the rest of the information we also set Distinct to make sure we<br>don&#39;t get a duplicated data.&nbsp;</div><div>3-&nbsp; unlike like the user when we need to<br>pass in get_user_id here we don&#39;t do that to make sure we get<br>every order</div><div>4- than we use the $_get method to get each appropriate category<br>and than we check if not empty. we&nbsp; assign each category to variable<br>we extract the data from orders table and we populated on the screen</div><div>5-<br>we set a result variable to make sure if there is no purchase<br>it display the data saying no item found if yes. than it loops<br>over each columns to get the appropriate data.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/tree/Milestone3">https://github.com/aeh250/it202-450/tree/Milestone3</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/orders_details.php?order_id=81">http://localhost:3000/project/orders_details.php?order_id=81</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921445-64d8d8ee-6505-41e8-82bf-bcbf1090e3c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>thank you <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921445-64d8d8ee-6505-41e8-82bf-bcbf1090e3c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>thank you<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/aeh25" target="_blank">Grading</a></td></tr></table>