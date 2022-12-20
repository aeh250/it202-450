<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Antony Habib (aeh25)</td></tr>
<tr><td> <em>Generated: </em> 12/19/2022 10:00:52 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-4-shop-project/grade/aeh25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921587-ce446130-2762-4e5b-9c3e-0375f11625eb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>now it populate on the table if its private or public<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921629-02e90264-aec0-4fbe-87ce-c55a04232880.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here it shows the button and view mode <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206921681-3fca1ec1-6c6f-4cbc-97ea-be767c11caa4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the list of rating and review wasn&#39;t given to the proposal but the<br>email address is hidden<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/profiles.php?id=51">http://localhost:3000/project/profiles.php?id=51</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>1- first we get the user id by get_user_id<div>2- we get the appropriate<br>columns which is mostly the username and eamil<br><div>2- when the toggle is hit<br>it make private</div><div>3- we have a if statement where if the it is<br>=== private than hide the email, else show the email or keep as<br>is.</div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/206925243-fe0a5e53-2886-4deb-b987-dae4440823e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the rating table from all the users <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207874025-ca2ab103-09e8-4afa-a343-a8a6c08a64e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>it shows the average rating in the form of the stars and each<br>comment and rating made by the user <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/preview_details.php?id=10">http://localhost:3000/project/preview_details.php?id=10</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>1- here after purchase the user is allow to put in the rating<br>which is a number and comment which is a string and than it<br>gets passed to the rating table by click submit and php request is<br>send to the raings table and products table takes the rating as an<br>avg by the avg function.<div>2- i have star populating as the average rating<br>of all user which is from the products table and I pass in<br>a php request inside the value of the star that have the se(with<br>result variable and rating columns from the products table which is the average<br>rating,</div><div>3-&nbsp; second if i have to populate the comments and the ratings of<br>every user necessary where the ratings.products.id = product.id to get all the ratings<br>associate with the id passed from the php when we pressed on the<br>the view button the shop page</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207062894-0d03b769-2d60-4f04-95b2-23d6f3009853.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>so right here it is sorted by the date which was created first<br>and the last and also pagination is applied to the page <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207064557-24f7003e-6998-49a1-9f3e-5cd9bcb51a9f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 2 of pagination<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/history.php">http://localhost:3000/project/history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207063404-e04ce721-8733-46cc-8133-03da35b91861.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>so right here it is sorted by the cost from low to high<br>and the admin is able to see all the orders from other users<br>and also pagination is applied to the page <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/admin/list_purchase_history.php?col=total_price&total_price=asc">http://localhost:3000/project/admin/list_purchase_history.php?col=total_price&total_price=asc</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>1- to use the filter we prepare our database and we select the<br>orders where we compare it the orderhistory to make sure we made the<br>purchase&nbsp;<div>2- then we assign variable to each column we get using $_get and<br>we also make sure it is not empty and we adjust our query<br>for each time we doing filtering&nbsp;</div><div>3- we have to prepare a 2 queries<br>for pagination and we need to set a page count in record_per_page which<br>i set to 2.</div><div>4- we use the offset to get the items per<br>page than we pass in the limit and we do the params one<br>for offset and one for limit, this will show items per page.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207063904-4da3fc59-d4bc-4a37-b1a5-42c7859bd954.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here I set the pagination to 5 per page <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207064284-b06b7783-6964-4713-ae7f-3edebb9b18fd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here is page 2 <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/shop.php">http://localhost:3000/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207066261-38755368-375e-4c53-b4e6-4ec8e45d0c06.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>pagination is applied here <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207066533-bed3319c-5ff3-4a5e-bf8b-78d869eb594b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here the admin or the shop owner was able to filter the stock<br>by 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/admin/list_items.php?name=&stock=0">http://localhost:3000/project/admin/list_items.php?name=&stock=0</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>1- every time a users purchase an item it dedicated from the stock<br>of the product.<div>2- first we extract the value of the stock and if<br>not we set the default value to -1&nbsp;</div><div>3- if the value is 0<br>we pass to the form when we extract the data from the product<br>table and pass to the url</div><div>4- than all the product that with 0<br>stocks will populate&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207068205-28469a8f-bd9f-45ec-b564-963288fcce1f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can searched the 3 stars product<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207068543-9f0994f6-13ad-4569-8b8e-59b588cc27f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here the user searched by 2 star<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207068784-43295340-54c0-4c8a-8b2d-7b4799305bfe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>here it show on the table the average ratings<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/aeh250/it202-450/pull/15">https://github.com/aeh250/it202-450/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://localhost:3000/project/shop.php?name=&rating=2&order=asc">http://localhost:3000/project/shop.php?name=&rating=2&order=asc</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on shop</td></tr>
<tr><td> <em>Response:</em> <p>1- here unlike the ratings table which need to save all the ratings<br>from each user or replace if it is the same user<div>2- here in<br>the product table each time a user rate the same product before saving<br>it we need to use avg function to pass in the data to<br>make sure we get the average.</div><div>3-&nbsp; and than pass it the star form<br>to get the right ratings for the user</div><div><br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/104512067/207068784-43295340-54c0-4c8a-8b2d-7b4799305bfe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>thank you<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-4-shop-project/grade/aeh25" target="_blank">Grading</a></td></tr></table>